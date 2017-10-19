<?php 
    /**
	 * Página de incio.
	 * @filesource index
	 * @author Daniel Martinez Sierra 
	 * @version 2017_v2
	 */
	define ("RUTA_BASE",dirname(realpath(__FILE__))."/");  

	require_once 'vendor/autoload.php';
    include  'config/config.php';
	session_start();
	$_SESSION['on'] = true; 
	
	use core\lib\Route\Router;
	$router=new Router();
	$router->submit();
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
	
	// $connection = new Connection([
	// 	'driver' => new MysqlDriver(),
	// 	'name'=> "connectionBlog"
	// ]);
	//  $connection->connect();
	 
	//  $res =$connection->prepare("select * from comentarios limit 1");
	//  $res->execute();
	//  $datos=$res->FetchAll(PDO::FETCH_ASSOC);
	//  d($datos);
	// $connection->disconnect();
	//  die();
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

	//Prueba de la clase Render
	//  use core\lib\View\RenderView;
	//  $view=new RenderView();
	//  $view->render("autentication.login");

	// use core\model\Entradas;
	// $entradas=new Entradas();
	// $datos=$entradas->all();
	// d($datos);

	//Utilizando el Constructor de querys   