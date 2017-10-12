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
	
    // use core\lib\Ruta;
	//Rutas Disponibles del sistema 
	// $ruta = new Ruta();
	// $ruta->submit();
	//die('location: '.$_SERVER['SERVER_NAME'].INDEX);
	
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
	
	// use core\ORM\MySqlProvider;
	// $mysqDB=new MySqlProvider();
	// $cnx=$mysqDB->connect(SERVIDOR,USUARIO,PASSWORD,DB_NAME);
	// print_r($cnx);

	// use core\ORM\Database\Driver\MysqlDriver;
	// use core\ORM\Database\Connection;
	
	// $driver = new MysqlDriver([
	// 	'database' => 'test',
	// 	'username' => 'root',
	// 	'password' => 'secret'
	// ]);
	// $driver = new MysqlDriver();
	// $connection = new Connection([
	// 	'driver' => $driver
	// ]);
	// $connection->connect();
	// $query = "SELECT * from comentarios limit 1";
	// $connection->execute($query);
	// $connection->disconnect();
	
	// $driver = new MysqlDriver();
	// $connection = new Connection([
	// 	'driver' => $driver
	// ]);
	// $connection->connect();
	// $query = "SELECT * from comentarios limit 1";
	// $datos=$connection->execute($query);
	// d($datos);
	// $connection->disconnect();
	
	//Ejemplo de uso de inicio de sesion
	// use core\lib\ManagerSession\Session;
	// $session = new Session();
	// $session->addValue("usuario","headcruser@gmail.com");
	// print_r($session->getValue("usuario"));
	// $session->destroySession();
	
	//Mejora del inicio de sesion
	// use core\lib\Autentication\AutenticationService;
	// use core\lib\ManagerSession\Session;

	// $autentication=new AutenticationService(new Session);
	// $respuesta=$autentication->login("headcruser@gmail.com","123456");
	// print_r($respuesta);
	// $autentication->logout();

	//Probando nuevo sistema de rutas
	use core\lib\Route\Router;
	$router=new Router();
	$router->submit();