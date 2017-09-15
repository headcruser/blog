<?php namespace core\ORM\Database;

use core\ORM\Database\DatabaseProvider;
use core\ORM\Database\DatabaseConfiguration;
use \PDO;

 /** @class: MySqlProvider 
  * @project: BlogProyect
  * @date: 13-09-2017
  * @version: php7.0
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
final class MySqlProvider extends DatabaseProvider
{

    public function __construct(DatabaseConfiguration $config)
    {
        if(is_null($config))
            throw new Exception("Datos de configuración vacios");
            
        $this->configuration=$config;

        try 
        {
            $this->resource = new \PDO('mysql:host='.$this->configuration->getHost().';dbname='.$this->configuration->getDbName(),
                                        $this->configuration->getUsername(),
                                        $this->configuration->getPassword());
            $this->resource-> setAttribute
                                    (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//mode error|ex

            $this->resource-> exec("SET CHARACTER SET utf8"); // modo de codificación  universal

        } catch (PDOException $ex) 
        {
            error_log("ERROR: " . $ex -> getMessage());
        }
    }

    public function __clone(){
        trigger_error("La clonacion de esta clase no esta permitida");
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
    
    public function isConnected():bool
    {
        return isset($this->resource);
    }

    /** 
     * Obtiene la conexión de la base de datos 
     *	@return Conexion Referencia de la conexion
     */
     public function getConection()
     {
          return $this->resource;
     }
    
}