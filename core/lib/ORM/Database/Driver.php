<?php namespace System\ORM\Database;

use InvalidArgumentException;
use PDO;

/**
 * Abstract Driver
 *
 * Representa un driver de base de datos que contiene todas las
 * especificaciones de un motor de de construcción de consultas.
 *
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 * @license https://opensource.org/licenses/mit-license.php MIT License
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
     * Constructor
     *
     * @param array $config The configuration for the driver.
     * @throws \InvalidArgumentException
     */
    public function __construct(array $config = [])
    {
        if (empty($config['username']) && !empty($config['login'])) {
            throw new InvalidArgumentException(
                'Please pass "username" instead of "login" for connecting to the database'
            );
        }
        $config += $this->_baseConfig;
        $this->_config = $config;
    }
    /**
     * __descruct()
     * Destructor
     */
    public function __destruct()
    {
        $this->disconnect();
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
     * Revisa si el driver esta conectado
     *
     * @return bool
     */
    abstract public function isConnected():bool;

    /**
     * Prepara la consulta escrita mediante sql
     *
     * @param string $query Consulta SQL
     * @return Statement
     */
    abstract public function prepare($query);

        /**
     * Starts a transaction
     *
     * @return bool true on success, false otherwise
     */
    abstract public function beginTransaction();
    /**
     * Commits a transaction
     *
     * @return bool true on success, false otherwise
     */
    abstract public function commitTransaction();
    /**
     * Rollsback a transaction
     *
     * @return bool true on success, false otherwise
     */
    abstract public function rollbackTransaction();
    /**
     * Regresa una Consulta entre comiilas
     *
     * @param mixed $value Cadena a entrecomillar.
     * @param string $type Tipo utilizado para realizar el entrecomillado
     * @return string
     */
    abstract public function quote($value, $type);
    /**
     * Regresa un arreglo con la información del estado de la conexión
     *
     * @access public
     * @return array
     */
    public function __debugInfo():array
    {
        return [ 'connected' => $this->_connection !== null];
    }
}
