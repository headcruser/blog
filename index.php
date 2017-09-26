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
	$ruta = new Ruta();
	$ruta->submit();

	
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
	