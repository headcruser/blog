<?php namespace core\ORM;

 use core\ORM\Conexion;
 use \PDO;

/**
* Clase que gestiona las consultas con la base de datos 
* @author Headcruser
* @version 2017_v1
*/
class EtORM extends Conexion
{    
    protected static $cnx;
    protected static $table;

    /**
     * Sirve para obtener la conexión con la base de datos
     * @return type Void 
     */
    public static function conectar()
    {
        self::$cnx=Conexion::getConection();
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

        self::conectar();
        $res = self::$cnx->prepare($query);
        for($i=0;$i < count($params);$i++)
        {
            $res->bindParam(":".$i,$params[$i]);
        }
        $res->execute();

        $obj = [];
        foreach($res as $row)
        {
            $obj[] = $row;
        }
        self::$cnx=null;
        return $obj;
    }

    /**
     * Elimina un elemento de la tabla 
     * @param type|null $valor indica el elemento a quitar
     * @param type|null $columna Especifica la columna de donde se borrara
     * @return type Boolean Regresa true si se elimino, false si hubo error
     */
    public function eliminar($valor=null,$columna=null)
    {
        $query = "DELETE FROM ". static ::$table ." WHERE ".(is_null($columna)?"id":$columna)." = :p";
        
        //preparamos la consulta
        self::conectar();

        $res = self::$cnx->prepare($query);

        // agregamos los parametros
        if(!is_null($valor))
            $res->bindParam(":p",$valor);
        else
            $res->bindParam(":p",(is_null($this->id)?null:$this->id));
        
        //ejecutar
        if($res->execute())
        {
            self::$cnx=null;
            return true;
        }else{
            return false;
        }
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

        $filtered = null; // una variable que va almacenar las columnas
        foreach ($values as $key => $value) 
        {
            // separa si es id - sino lo agrega al array
            if ($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') 
            {
                if ($value === false) 
                {
                    $value = 0;
                }
                $filtered[$key] = $value;   
            }
        }
        $columns = array_keys($filtered); // obteniendo las columnas
        //echo json_encode($columns);

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
        
        //preparamos la consulta
        self::conectar();
        $res = self::$cnx->prepare($query);

        foreach ($filtered as $key => &$val) 
        {//cargamos todos los valores de los parametros
            $res->bindParam(":".$key, $val);
        }

        //realizamos una respuesta
        if($res->execute())
        {
            $this->id = self::$cnx->lastInsertId();
            self::$cnx=null;
            return true;
        }
        else{
            return false;
        }
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

        self::conectar();
        $res = self::getConection()->prepare($query);
        $res->bindParam(":".$columna,$valor);
        $res->execute();
        
        $data = [];
        foreach($res as $row){
            $data[] = new $class($row);
        }

        self::$cnx=null;
        return $data;
    }

    /**
     * Busqueda de un elemento por medio de su id
     * @param type $id Identificador de la entidad
     * @return type Array  Regresa un arreglo con los elementos encontrados
     */
    public static function find($id)
    {
        //echo get_called_class();
        $resultado = self::where("id",$id);

        if(count($resultado))
            return $resultado[0];
        else
            return [];
    }

    /**
     * Obtiene los elementos de la tabla 
     * @return type Object[] Regresa un arreglo de los elementos
     */
    public static function all()
    {
        $datos=array();
        $query = "SELECT * FROM ". static ::$table ;
        $class = get_called_class();

        self::conectar();
        $res =self::$cnx->prepare($query);
        $res->execute();
        
       
        foreach($res as $row){
            $datos[] = new $class($row); //de esta forma se obtiene por clase
        }
        self::$cnx=null;

        return $datos;
    }

    /**
     * Obtiene un arreglo asociativo con la informarcion de la base de datos
     * @return type Object[]
     */
    public static function fetchAll($params=null)
    {
        $datos=array();
        $query = "SELECT ";
        
        if(is_array($params))
        {
            for($i=0;$i < count($params);$i++)
            {
                if( $i == ( count($params)-1) )
                    $query.= $params[$i]." ";
                else
                    $query.= $params[$i].",";
            }

            $query.="FROM ". static ::$table;
        }else{
            $query.=" * FROM ". static ::$table;
        }

        self::conectar();
        $res =self::$cnx->prepare($query);
        $res->execute();
        
        //Obtiene los elementos usando fetchAll
        $datos=$res->FetchAll(PDO::FETCH_ASSOC);

        self::$cnx=null;

        return $datos;
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