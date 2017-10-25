<?php namespace core\ORM\Storage;
use \PDO;
use \PDOException;
use core\ORM\Database\Driver;
use core\ORM\Database\Connection;
use core\ORM\Storage\interfaceStorage;
use core\ORM\Database\Driver\MysqlDriver;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
/**
 * Mysql Storage
 * 
 * Define las operaciones básicas para que el repositorio
 * pueda realizar consultas mas avanzadas
 * 
 * @version: php7
 * @author: Daniel Martinez | headcruser@gmail.com
 * @copyright: Daniel Martinez
 */
abstract class MysqlStorageAdapter implements interfaceStorage
{
    /**
     * Conexion a base de datos;
     * 
     * @var $connection \core\ORM\Database\Connection;
     */
    protected $connection;
    /**
     * Construye las sentencias SQL
     * 
     * @var $queryBuilder \NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder
     */
    protected $Querybuilder;
    /**
     * Referencia de la tabla en la base de datos
     * 
     * @var string $table
     */
    protected $table;
    
    public function __construct(string $nameTable,Driver $driver)
    {
        $this->table=$nameTable;

        $this->connection = new Connection([
            'driver' => $driver,
            'name'=> "connectionBlog"
            ]);
        
        $this->Querybuilder = new GenericBuilder();
    }
    /**
     * FindAll
     * 
     * Obtiene la consulta de todos los usuarios. En esta consulta 
     * se pueden especificar las columnas que se deseen
     * 
     * @param array $colums Especifica las columnas que se desean de la consulta 
     * @return type Object[] Regresa un arreglo de los elementos
     */
    public function findAll( array $columns=[] ) : array
    {
        $datos=array();
        $select=$this->select($columns);
        $SQL=$this->buildingQuery($select);
        $res=self::executeQuery($SQL);
        $datos=$res->FetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }
    /**
     * find
     * 
     * Realiza una busqueda por medio del identificador de la tabla
     * @param mixed $idUsuario 
     * @return mixed 
     */
    public function find(int $idUsuario)
    {
        $resultado = $this->where("id",$idUsuario);
        if(!count($resultado))        
            return [];

        return $resultado;        
    }
     /**
     * Where
     * 
     * Busca un elemento en la base de datos, espeficando 
     * el campo y valor a comparar.
     * 
     * @param type $columna Especifica la columna a buscar
     * @param type $valor Elemento de la columna a buscar
     * @return type Array Regresa un arreglo con los elementos encontrados
     */
    public function where($columna,$valor)
    {        
        $data=array();
        $select=$this->select();
        $select->where()
               ->equals( $columna, $valor );
        
        $SQL=$this->buildingQuery($select);
        $values = $this->Querybuilder->getValues();        
        $res=self::executeQuery($SQL,$values);
        $data=$res->FetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
     /**
     * select
     * 
     * Construye la sentencia select
     * 
     * @param array $params Indica las columnas que seleccione el usuario
     * @return string Regresa la cadena construida con la sentencia select 
     */
    protected function select(array $params=null)
    {        
        $select = $this->Querybuilder
                      ->select()
                      ->setTable($this->table);
        
        if(is_array($params) && !empty($params))
            $select->setColumns($params);
        
        return $select;
    }
    /**
     * remove
     * 
     * Elimina un usuario de la base de datos.
     * @param int $id codigo de identificación del usuario.
     * @return void 
     */
    public function remove($id)
    {
        $delete=$this->delete($id);
        $SQL=$this->buildingQuery($delete);
        $values = $this->Querybuilder->getValues();        
        $res=self::executeQuery($SQL,$values);
    
        if(!$res->execute())
            return false;

        return true;
    }

    protected function delete($valor=null,$columna=null)
    {
        $delete = $this->Querybuilder
            ->delete()
            ->setTable($this->table);
        $delete
            ->where()
            ->equals( (is_null($columna)?"id":$columna),$valor);

        return $delete;
    }

    public function update($column,$values)
    {
        $update = $this->Querybuilder
            ->update()
            ->setTable($this->table);
        
        $update->setValues($values);

        $delete
            ->where()
            ->equals('id',$id);

        return $delete;
    }

    /**
     * buildingQuery
     * 
     * Construye la sentencia SQL.
     * @param object $query 
     * @return string Regresa una cadena con la sentencia SQL.
     */
    protected function buildingQuery($query):string
    {
        return $this->Querybuilder->write($query);
    }
     /**
     * ExecuteQuery
     * 
     * Ejecuta la sentencia preparada enviada por el usuario
     * @param string $query Obtiene la consulta a ejecutar  
     * @return object Regresa un conjunto de resultados obtenidos por la consulta
     */
    protected function executeQuery(string $query, array $args=[])
    {
        $this->connection->connect();
        try 
        {
            $res =$this->connection->prepare( $query );
            
            if( is_array( $args ) && !empty( $args ) )
                foreach ($args as $key => &$val) 
                    $res->bindParam($key, $val);   
            
            $res->execute();

        }catch( PDOException $e ){
            die( 'Error en consulta: '.$e->getMessage() );
        }finally{
            $this->connection->disconnect();
        }
        return $res;
    }
}