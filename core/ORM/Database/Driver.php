<?php
/**
 * Blog(tm) : Desarrollo de un miniframework para aprendizaje personal
 * El desarrollo de este driver fue con la guia del repositorio de
 * Cake Software Foundation, Inc. 
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database;
use InvalidArgumentException;
use PDO;

/**
 * Representa un driver de base de datos que contiene todas las 
 * especificaciones de un motor de de construcción de consultas.
 *
 * @property  $_connection
 */
abstract class Driver
{
    /**
     * Configuración de datos.
     *
     * @var array
     */
    protected $_config;
    /**
     * configuración asignada por el usuario.
     *
     * @var array
     */
    protected $_baseConfig = [];
    /**
     * Indicates whether or not the driver is doing automatic identifier quoting
     * for all queries
     *
     * @var bool
     */
    protected $_autoQuoting = false;
    /**
     * Constructor
     *
     * @param array $config The configuration for the driver.
     * @throws \InvalidArgumentException
     */
    public function __construct($config = [])
    {
        if (empty($config['username']) && !empty($config['login'])) {
            throw new InvalidArgumentException(
                'Please pass "username" instead of "login" for connecting to the database'
            );
        }
        $config += $this->_baseConfig;
        $this->_config = $config;
        if (!empty($config['quoteIdentifiers'])) {
            $this->enableAutoQuoting();
        }
    }
    /**
     * Establecer una conexión con el servidor
     *
     * @return bool true on success
     */
    abstract public function connect():bool;
    /**
     * Disconnects from database server
     *
     * @return void
     */
    abstract public function disconnect();
    /**
     * Regresa el recurso interno de la conexion.
     * si el primer argumento fue asignado
     *
     * @param null|\PDO $connection The connection object
     * @return \PDO
     */
    abstract public function connection($connection = null);
    /**
     * Indica si el driver de la conexion es valido
     *
     * @return bool true Si es valido el driver
     */
    abstract public function enabled() :bool;
    /**
     * Prepares a sql statement to be executed
     *
     * @param string|\Cake\Database\Query $query The query to convert into a statement.
     * @return \Cake\Database\StatementInterface
     */
    /**
     * Revisa si el driver esta conectado
     *
     * @return bool
     */
    public function isConnected():bool
    {
        return $this->_connection !== null;
    }
    /**
     * Identificador para las consutlas
     *
     * @param bool $enable Whether to enable auto quoting
     * @return $this
     */
    public function enableAutoQuoting($enable = true):Driver
    {
        $this->_autoQuoting = (bool)$enable;
        return $this;
    }
    /**
     * Returns whether or not this driver should automatically quote identifiers
     * in queries
     *
     * @access public
     * @return bool
     */
    public function isAutoQuotingEnabled():bool
    {
        return $this->_autoQuoting;
    }
    /**
     * Destructor
     */
    public function __destruct()
    {
        $this->_connection = null;
    }
    /**
     * Regresa un arreglo con la información del estado de la conexión
     * 
     * @access public
     * @return array
     */
    public function __debugInfo():array
    {
        return [
            'connected' => $this->_connection !== null
        ];
    }
}