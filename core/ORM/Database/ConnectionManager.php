<?php
namespace core\ORM\Database;

use core\ORM\Database\Driver\MysqlDriver;
use core\ORM\Database\Connection;

/**
 * Maneja las instancias de una conexion
 *
 * Provee una interface para cargar y crear conexiones a base de datos,
 *
 */
final class ConnectionManager
{
  /**
   * Instancia de Manejador de conexiones
   * @var ConnectionManager 
   */
    private static $instanceConnection;
    /**
   * Referencia a la clase Connection.
   * 
   * @var core\ORM\Database\Connection 
   */
    protected static $conn;

    /**
     * Construye el manejador de conexión
     */
     private function __construct()
     {
        $driver = new MysqlDriver();
        self::$conn = new Connection( ['driver' => $driver ] );     
     }
  
    public static function get():ConnectionManager
    {
        if (null === static::$instanceConnection) {
            static::$instanceConnection = new static();
        }
        return static::$instanceConnection;
    }

    public function Connection(){
        return self::$conn;
    }
    
    /**
     * __clone
     * @return mixed 
     */
    public function __clone(){
        trigger_error("La clonación de ConnectionManager no esta permitida");
    }
}