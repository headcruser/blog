<?php 
    /**
	 * CARGA LOS NAMESPACES
	 * @filesource core/autoload.php
	 * @author Daniel Martinez Sierra 
	 */

    session_start(); // Iniciamos la sesion

    //Ruta Principal del proyecto
	define ("RUTA_BASE",dirname(realpath(__FILE__))."/");  

	require_once 'vendor/autoload.php';

	//Incluye archivos de configuracion
    include  'config/config.php';
	
    use core\lib\Ruta;
	//Rutas Disponibles del sistema 
	 //$ruta = new Ruta();
	 //$ruta->submit();

	
	//Clase Conexion normal

	// use core\ORM\Conexion;	
	// $cnx=Conexion::getConection();
	
	// $query = "SELECT * from comentarios";
	// $res =$cnx->prepare($query);
	// $res->execute();
	
	// //Obtiene los elementos usando fetchAll
	// $datos=$res->FetchAll(PDO::FETCH_ASSOC);
	// d($datos);
	
	// Conexion::closeConection();
	// $cnx=null;

	//Usando La nueva abstraccion
/*
	use core\ORM\Database\MySqlProvider;
	use core\ORM\Database\DatabaseConfiguration;
	
	
	$Mysql=new MySqlProvider( new DatabaseConfiguration() );
	$cnx = $Mysql->getConection();
	
	
	 $query = "SELECT * from comentarios limit 1";
	 $res =$cnx->prepare($query);
	 $res->execute();
	
	// //Obtiene los elementos usando fetchAll
	 $datos=$res->FetchAll(PDO::FETCH_ASSOC);
	 d($datos);
	
	$Mysql->disconnect();
*/

// use core\model\Usuario;
// $usuario=new Usuario();
// $datos = $usuario->fetchAll(array("id","nombre","email"));
// d($datos);

use core\ORM\Database\Driver\MysqlDriver;
use core\ORM\Database\Connection;
use core\ORM\Database\ConnectionManager;
// $driver = new MysqlDriver();
// // $driver = new MysqlDriver([
// // 	'database' => 'test',
// // 	'username' => 'root',
// // 	'password' => 'secret'
// // ]);
// $connection = new Connection([
// 	'driver' => $driver
// ]);
// $connection->connect();
// $query = "SELECT * from comentarios limit 1";
// $connection->execute($query);
// $connection->disconnect();


//Nueva sintaxis usando una clase manejadora de conexiones

$conn=ConnectionManager::get()->Connection();
$conn->connect();
$query = "SELECT * from comentarios limit 1";
$conn->execute($query);
$conn->disconnect();