<?php namespace core\ORM;

use core\ORM\DatabaseProvider;
use \PDO;

/*Clase encargada de construir la conexion con mysql**/
class MySqlProvider extends DatabaseProvider
{
    /*Se encarga de establecer la conexión con el servidor**/
    public function connect($host,$user,$pass,$dbname)
    {
        try 
            {
                $this->resource = new \PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
                $this->resource-> setAttribute
                                        (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//mode error|ex

                $this->resource-> exec("SET CHARACTER SET utf8"); // modo de codificación  universal

            } catch (PDOException $ex) 
            {
                error_log("ERROR: " . $ex -> getMessage());
            }
            return $this->$resource;
    }
    
    public function disconnect()
    {
        return $this->resource=null;
    }

    public function getNoError()
    {
        if(!$this->isConnected())
            return array();

        return $this->resource->errorInfo();
    }
    
    public function isConnected()
    {
        return !is_null($this->resource);
    }
    
}