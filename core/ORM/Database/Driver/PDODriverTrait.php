<?php namespace core\ORM\Database\Driver;

use PDO;

/**
* PDODriverTrait
*
* Establece la conexión con el servidor mediante PDO
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
trait PDODriverTrait
{
    /**
      * Instancia de PDO.
      *
      * @var \PDO|null
      */
    protected $_connection;

    /**
      * Establece conexion con la base de datos del servidor.
      *
      * @param string $dsn In driver especifico PDO-DSN
      * @param array $config Configuracion para la creacion de la conexión
      * @return bool Regresa True en caso de ser exitoso
      */
    protected function _connect($dsn, array $config):bool
    {
        $connection = new PDO(
            $dsn,
            $config['username'],
            $config['password'],
            $config['flags']
        );
        $this->connection($connection);
        return true;
    }
    /**
      * Regresa una conexion correcta del objeto intermantente usado si el primer
      * Argumento asignado es correcto.
      *
      * @param null|\PDO $connection La instancia de conexion PDO.
      * @return \PDO objeto de conexion usado internamente.
      */
    public function connection($connection = null)
    {
        if ($connection !== null) {
            $this->_connection = $connection;
        }
        return $this->_connection;
    }
    /**
      * isConnected
      *
      * Revisa si el driver esta conectado con el servidor
      *
      * @return bool
      */
    public function isConnected():bool
    {
        if ($this->_connection === null) {
            $connected = false;
        } else {
            try {
                $connected = $this->_connection->query('SELECT 1');
            } catch (\PDOException $e) {
                $connected = false;
            }
        }
        return (bool)$connected;
    }
    /**
      * Desconecta del servidor de base de datos
      *
      * @return void
      */
    public function dispose()
    {
        $this->_connection = null;
    }
    /**
     * prepare
     *
     * Prepara una sentencia Sql
     *
     * @param string $query The query to turn into a prepared statement.
     * @return StatementInterface
     */
    public function prepare($query)
    {
        $this->connect();
        $statement = $this->_connection->prepare($query);
        return $statement;
    }
    /**
     * Inicia una transacción
     *
     * @return bool true on success, false otherwise
     */
    public function beginTransaction()
    {
        $this->connect();
        if ($this->_connection->inTransaction()) {
            return true;
        }
        return $this->_connection->beginTransaction();
    }
    /**
     * Commits a una transaccion
     *
     * @return bool true on success, false otherwise
     */
    public function commitTransaction()
    {
        $this->connect();
        if (!$this->_connection->inTransaction()) {
            return false;
        }
        
        return $this->_connection->commit();
    }
    /**
     * Rollback a transaction
     *
     * @return bool true on success, false otherwise
     */
    public function rollbackTransaction()
    {
        $this->connect();
        if (!$this->_connection->inTransaction()) {
            return false;
        }
        
        return $this->_connection->rollback();
    }
    /**
     * Entrecomilla el string de entrada (si fuera necesario) y escapa los
     * caracteres especiales contenidos en dicho string, usando un estilo
     * de entrecomillado apropiado para el controlador subyacente.
     *
     * @param mixed $value Cadena a entrecomiillar.
     * @param string $type Tipo utillizado para poder realizar el entrecomillado
     * @return string
     */
    public function quote($value, $type)
    {
        $this->connect();
        return $this->_connection->quote($value, $type);
    }
    /**
     * Regresa el ultimo id generado por la tabla en secuencia de la base de datos
     *
     * @param string|null $table nombre de la tabla para obtener el ultimo valor insertado
     * @return string|int
     */
    public function lastInsertId($table = null, $column = null)
    {
        $this->connect();
        return $this->_connection->lastInsertId($table);
    }
}
