<?php namespace core\ORM\Database;

use core\ORM\Database\Driver;
use core\ORM\Database\IConnection;
use core\ORM\Database\Exception\MissingConnectionException;
use core\ORM\Database\Exception\MissingExtensionException;

/**
* Connection.
*
* Encapsula la conexión, dependiendo el driver implementado.
* Fork de Cake php
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class Connection implements IConnection
{
    /**
     * Contiene los parametros de configuración para esta conexión
     *
     * @var array
     */
    protected $_config;
    /**
     * Objeto Driver
     *
     * Responsable de crear la conexion real
     *
     * @var \core\ORM\Database
     */
    protected $_driver;
    /**
     * Constructor.
     *
     * @param array $config configuration for connecting to database
     */
    public function __construct(array $config)
    {
        $this->_config = $config;

        if (!empty($config['driver'])) {
            $driver = $config['driver'];
        }
        
        $this->setDriver($driver);
    }
    /**
     * Asigna el driver a la conexión
     *
     * @param  \core\ORM\Database\Driver $driver Instancia de un driver.
     * @throws \core\ORM\Database\Exception\MissingExtensionException Lanza una excepcion si el driver No es valido.
     * @return $this
     */
    public function setDriver(Driver $driver)
    {
        if (!$driver->enabled()) {
            throw new MissingExtensionException(['driver' => get_class($driver)]);
        }
        
        $this->_driver = $driver;

        return $this;
    }
    /**
     * Obtiene el driver de la instancia
     *
     * @return \core\ORM\Database\Driver
     */
    public function getDriver():Driver
    {
        return $this->_driver;
    }
    /**
    * Obtiene los parámetros de configuración
    * @return $_config
    */
    public function config():array
    {
        return $this->_config;
    }
    /**
    * Configura el nombre de la conexion
    * @return string
    */
    public function configName():string
    {
        if (empty($this->_config['name'])) {
            return '';
        }
        return $this->_config['name'];
    }
    /**
     * Conecta la configuracion de la base de datos
     *
     * @throws \core\ORM\Database\Exception\MissingConnectionException si las crendenciales no son correctas.
     * @return bool true, Si la conexión se realizo de manera existosa
     */
    public function connect():bool
    {
        try {
            return $this->_driver->connect();
        } catch (\Exception $e) {
            throw new MissingConnectionException(['reason' => $e->getMessage()]);
        }
    }
    /**
     * Desconecta el servidor de base de datos
     *
     * @return void
     */
    public function disconnect()
    {
        $this->_driver->disconnect();
    }
    /**
     * Regresa el estado de la conexion de la base de datos
     *
     * @return bool
     */
    public function isConnected():bool
    {
        return $this->_driver->isConnected();
    }

     /**
     * Destructor
     *
     * Desconecta el driver asociado con la conexión
     */
    public function __destruct()
    {
        $this->_driver=null;
    }
      /**
     * Prepara una sentencia Sql para ser Ejecutada.
     *
     * @param string $sql The SQL to convert into a prepared statement.
     * @return statement
     */
    public function prepare($sql)
    {
        return $this->_driver->prepare($sql);
    }

      /**
     * Starts a new transaction.
     *
     * @return void
     */
    public function begin():bool
    {
        return $this->_driver->beginTransaction();
    }
    /**
     * Commits current transaction.
     *
     * @return bool true on success, false otherwise
     */
    public function commit():bool
    {
        return $this->_driver->commitTransaction();
    }
    /**
     * Rollback current transaction.
     *
     * @return bool
     */
    public function rollback():bool
    {
        return $this->_driver->rollbackTransaction();
    }
    public function lastInsertId($table = null)
    {
        return $this->_driver->lastInsertId($table);
    }
    /**
     * Returns an array that can be used to describe the internal state of this
     * object.
     *
     * @return array
     */
    public function __debugInfo()
    {
        $secrets = [
            'password' => '*****',
            'username' => '*****',
            'host' => '*****',
            'database' => '*****',
            'port' => '*****'
        ];
        $replace = array_intersect_key($secrets, $this->_config);
        $config = $replace + $this->_config;
        return [
            'config' => $config
        ];
    }
    /**
     * getSchema
     *
     * Obtiene en nombre de la base de datos.
     *
     * @return string Regresa el nombre de la base de datos actual
     */
    public function getSchema():string
    {
        return $this->_driver->schema();
    }
}
