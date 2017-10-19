<?php namespace core\ORM;
 use core\ORM\Database\Driver\MysqlDriver;
 use core\ORM\Database\Connection;
 use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
 use \PDO;
/**
  * Gestión de consultas a la base de datos
  * @class: DatabaseConfiguration
  * @project: BlogProyect
  * @date: 15-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class EtORM
{    
    protected static $cnx;
    protected static $table;

    /**
     * Sirve para obtener la conexión con la base de datos
     * @return type Void 
     */
    public static function buildConection()
    {
        $connection = new Connection([
                    'driver' => new MysqlDriver(),
                    'name'=> "connectionBlog"
                    ]);
        self::$cnx=$connection;
    }

    /**
     * obtiene el nombre de la tabla
     * @return type Void
     */
    public static function getTable()
    {
        echo static::$table;
    }

    public function Ejecutar($procedimiento,$params=null)
    {
        $query = "call ".$procedimiento;

        if(!is_null($params))
        {
            $paramsa = "";
            for($i=0;$i < count($params);$i++){
                $paramsa .= ":".$i.",";
            }
            $paramsa =  trim($paramsa,",");
            $paramsa .= ")";
            $query .= "(".$paramsa;
        }else{
            $query .= "()";
        }
        
        //agregando parametros al query

        self::buildConection();
        self::$cnx->connect();
        $res = self::$cnx->prepare($query);
        for($i=0;$i < count($params);$i++)
        {
            $res->bindParam(":".$i,$params[$i]);
        }
        $res->execute();

        $obj = [];
        
        foreach($res as $row)
            $obj[] = $row;
        
        self::$cnx->disconnect();
        return $obj;
    }
    /**
     * eliminar
     * 
     * Remueve un elemento de la base de datos
     * 
     * @param type|null $valor indica el elemento a quitar
     * @param type|null $columna Especifica la columna de donde se borrara
     * @return type Boolean Regresa true si se elimino, false si hubo error
     */
    public function eliminar($valor=null,$columna=null)
    {
        $query = "DELETE FROM ". static ::$table ." WHERE ".(is_null($columna)?"id":$columna)." = :p";        
        
        self::buildConection();
        self::$cnx->connect();
        $res = self::$cnx->prepare($query);
        
        if(!is_null($valor))
            $res->bindParam(":p",$valor);
        else
            $res->bindParam(":p",(is_null($this->id)?null:$this->id));
        
        if(!$res->execute())
            return false;
        
        self::$cnx->disconnect();
            
        return true;
    }
    /**
     * Guarda un objeto en la base de datos. Tambien sirve 
     * para la actualización, simplemente en el objeto hay que indicar 
     * el id para que se actualize.
     * @return type Void
     */
    public function guardar()
    {
        $values = $this->getColumnas();

        $filtered = null;
        foreach ($values as $key => $value) 
        {
            if ($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') 
            {
                if ($value === false) 
                    $value = 0;
            
                $filtered[$key] = $value;   
            }
        }
        
        $columns = array_keys($filtered);

        if ($this->id) 
        {
            $params = "";
            foreach($columns as $columna)
            {
                $params .= $columna." = :".$columna.",";
            }
            $params =  trim($params,",");
            $query = "UPDATE " . static ::$table . " SET $params WHERE id =" . $this->id;            
        } else {
            $params = join(", :", $columns);
            $params = ":".$params;
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";
        }
        
        self::buildConection();
        self::$cnx->connect();
        $res = self::$cnx->prepare($query);

        foreach ($filtered as $key => &$val) 
            $res->bindParam(":".$key, $val);
        
        if(!$res->execute())
            return false;
        
        $this->id = self::$cnx->lastInsertId('');
        self::$cnx->disconnect();        
        return true;
    }

    /**
     * Busca un elemento en la base de datos
     * @param type $columna Especifica la columna a buscar
     * @param type $valor Elemento de la columna a buscar
     * @return type Array Regresa un arreglo con los elementos encontrados
     */
    public static function where($columna,$valor)
    {
        $query = "SELECT * FROM ". static ::$table ." WHERE ".$columna." = :".$columna;
        $class = get_called_class();

        self::buildConection();
        self::$cnx->connect();
        $res = self::$cnx->prepare($query);
        $res->bindParam(":".$columna,$valor);
        $res->execute();
        
        $data = [];
        foreach($res as $row){
            $data[] = new $class($row);
        }

        self::$cnx->disconnect();

        return $data;
    }

    /**
     * Busqueda de un elemento por medio de su id
     * @param int $id Identificador de la entidad
     * @return type Array  Regresa un arreglo con los elementos encontrados
     */
    public static function find(int $id)
    {
        $resultado = self::where("id",$id);

        if(!count($resultado))        
            return [];

        return $resultado[0];
    }
    /**
     * Obtiene los elementos de la tabla 
     * @return type Object[] Regresa un arreglo de los elementos
     */
    public static function all(array $params=[])
    {        
        $res=self::prepareSelect($params);
        
        $datos=array();
        $class = get_called_class();

        foreach($res as $row)
            $datos[] = new $class($row);

        self::$cnx->disconnect();

        return $datos;
    }

    /**
     * Obtiene un arreglo asociativo con la informarcion de la base de datos
     * @return type Object[]
     */
    public static function fetchAll($params=null)
    {
        $datos=array();
        $res=self::prepareSelect($params);
        $datos=$res->FetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }

    public static function prepareSelect(array $params=null)
    {
        $builder = new GenericBuilder(); 
        
        $query = $builder->select()
                        ->setTable(static ::$table);
        
        if(is_array($params) && !empty($params))
            $query->setColumns($params);
        
        $SQL=$builder->write($query);  
                
        $res=self::executeQuery($SQL);

        return $res;
    }

    private function executeQuery(string $query)
    {
        self::buildConection();
        self::$cnx->connect();
        $res =self::$cnx->prepare($query);
        $res->execute();
        self::$cnx->disconnect();
        return $res;
    }
    /**
     * Obtiene el nombre de las columnas
     * @param type $datos Obtiene un arreglo asociativo (fetchAll) 
     * @return type Object Regresa un arreglo con los nombres de las columnas
     */
    public function getNombresColumnas($datos)
    {
        return array_keys($datos[0]);
    }
}