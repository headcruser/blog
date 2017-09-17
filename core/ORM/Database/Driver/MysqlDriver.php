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
 * @since         0.0.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database\Driver;

use core\ORM\Database\Driver;
use PDO;

class MysqlDriver extends Driver
{
    use PDODriverTrait;
    /**
     *Configuración básica para el servidor de mysql
     *
     * @var array
     */
    protected $_baseConfig = [
        'persistent' => true,
        'host' => SERVIDOR,
        'username' => USUARIO,
        'password' => PASSWORD,
        'database' => DB_NAME,
        'port' => PUERTO,
        'flags' => [],
        'encoding' => ENCODING,
        'timezone' => null,
        'init' => [],
    ];
    /**
     * Versión del servidor
     *
     * @var string
     */
    protected $_version;
    /**
     * Establece una conexion con la base de datos
     * 
     * Este metódo es utilizado para realizar la conexión
     * a una Base de datos, el cual hace uso de un traitPDO
     * el cual tiene la configuración para conectarse a 
     * traves de PDO.
     * 
     * @access public
     * @return bool true on success
     */
    public function connect():bool
    {
        if ($this->_connection) {
            return true;
        }
        $config = $this->_config;
        if ($config['timezone'] === 'UTC') {
            $config['timezone'] = '+0:00';
        }
        if (!empty($config['timezone'])) {
            $config['init'][] = sprintf("SET time_zone = '%s'", $config['timezone']);
        }
        if (!empty($config['encoding'])) {
            $config['init'][] = sprintf('SET NAMES %s', $config['encoding']);
        }
        $config['flags'] += [
            PDO::ATTR_PERSISTENT => $config['persistent'],
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        if (!empty($config['ssl_key']) && !empty($config['ssl_cert'])) {
            $config['flags'][PDO::MYSQL_ATTR_SSL_KEY] = $config['ssl_key'];
            $config['flags'][PDO::MYSQL_ATTR_SSL_CERT] = $config['ssl_cert'];
        }
        if (!empty($config['ssl_ca'])) {
            $config['flags'][PDO::MYSQL_ATTR_SSL_CA] = $config['ssl_ca'];
        }
        if (empty($config['unix_socket'])) {
            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']};charset={$config['encoding']}";
        } else {
            $dsn = "mysql:unix_socket={$config['unix_socket']};dbname={$config['database']}";
        }

        //Uso del trait PDO driver
        $this->_connect($dsn, $config);
        if (!empty($config['init'])) {
            $connection = $this->connection();
            foreach ((array)$config['init'] as $command) {
                $connection->exec($command);
            }
        }
        return true;
    }
    /**
     * Regresa un driver valido
     *
     * @access public
     * @return bool true Es valido usar estre driver.
     */
    public function enabled():bool
    {
        return in_array('mysql', PDO::getAvailableDrivers());
    }
}