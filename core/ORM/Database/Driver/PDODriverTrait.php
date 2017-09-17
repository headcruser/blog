<?php
/**
 * Blog(tm) :Construcción de un Miniframework basado en cake
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.0.1
 * @version:      php 7.0
 * @author:       headcruser@gmail.com
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database\Driver;

use PDO;

/**
 * PDO driver trait
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
      * Desconecta del servidor de base de datos
      *
      * @return void
      */
     public function disconnect()
     {
         $this->_connection = null;
     }

     /**
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
 }