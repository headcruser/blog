<?php
/**
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database;

use core\ORM\Database\Driver;
use core\ORM\Database\IConnection;
use core\ORM\Database\Exception\MissingConnectionException;
use core\ORM\Database\Exception\MissingExtensionException;
/**
 * Representa una conecion con la base de datos
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
     * Objeto Driver,Responsable de crear la conexion real 
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
        $driver = '';
        if (!empty($config['driver'])) {
            $driver = $config['driver'];
        }
        $this->setDriver($driver, $config);
        if (!empty($config['log'])) {
            $this->logQueries($config['log']);
        }
    }
    /**
     * Asigna las instancias drivers, si es un string, lo pasa a una clase instanciada
     *
     * @param \core\ORM\Database $driver Instancia de un driver.
     * @param array $config Config for a new driver.
     * @throws \Cake\Database\Exception\MissingExtensionException When a driver's PHP extension is missing.
     * @return $this
     */
    public function setDriver(Driver $driver,array $config = [])
    {
        if (!$driver->enabled()) {
            throw new MissingExtensionException(['driver' => get_class($driver)]);
        }
        $this->_driver = $driver;
        return $this;
    }
    /**
     * Gets the driver instance.
     *
     * @return \Cake\Database\Driver
     */
    public function getDriver()
    {
        return $this->_driver;
    }
    /**
     * Sets the driver instance. If a string is passed it will be treated
     * as a class name and will be instantiated.
     *
     * If no params are passed it will return the current driver instance.
     *
     * @deprecated 3.4.0 Use setDriver()/getDriver() instead.
     * @param \Cake\Database\Driver|string|null $driver The driver instance to use.
     * @param array $config Either config for a new driver or null.
     * @throws \Cake\Database\Exception\MissingDriverException When a driver class is missing.
     * @throws \Cake\Database\Exception\MissingExtensionException When a driver's PHP extension is missing.
     * @return \Cake\Database\Driver
     */
    public function driver($driver = null, $config = [])
    {
        if ($driver !== null) {
            $this->setDriver($driver, $config);
        }
        return $this->getDriver();
    }
    /**
    * Obtiene los parámetros de configuración
    */
    public function config()
    {
        return $this->_config;
    }
    /**
    * Configura el nombre de la conexion
    */
    public function configName()
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
   
}