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
	// session_start();
	// $_SESSION['on'] = true; 
	
	// use core\lib\Route\Router;
	// $router=new Router();
	// $router->submit();
	//die('location: '.$_SERVER['SERVER_NAME'].INDEX);
	      
	
	use core\model\Usuario;
	use core\ORM\Storage\Usuario\UsuarioStorage;
	use core\ORM\Repository\Usuario\UserRepository;
	
	$repository=new UserRepository( new UsuarioStorage );	
	$usuarios=$repository->findAll();
	d($usuarios);
	//$storage->save(Usuario::create("1","Daniel","tortis_90@hotmail.com","pass","2016","1") );
