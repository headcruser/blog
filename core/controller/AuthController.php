<?php
 use core\model\Usuario; 
 use core\lib\Vista;
 use core\help\help;

/**
* Clase controladora de la pagina principal
*/
class AuthController 
{
	
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{	
		//template(dir/tpl), nombre variable , contenido variable
		die("vista Login");
	}

	/**
	 * Iniciar sesion en la aplicacion
	 * @return type
	 */
	public function login()
	{
		if( $_SERVER['REQUEST_METHOD']!='POST'){
			return Vista::crear("error.error","error","No has enviado por post");
		}

		if( !isset($_POST['email']) || !isset($_POST['pasword'])){
			return Vista::crear("error.error","error","Uno de los campos esta vacio");
		}

		$email=help::validarCampo($_POST['email']);
		$pasword=help::validarCampo($_POST['pasword']);

		$resultado=array();
		$usuario=new Usuario();

		header('Content-type: application/json');
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");

	      if($usuario->login($email,$pasword))
	      	$resultado=array("estado"=>"true");
	      else
	      	$resultado=array("estado"=>"false");	
	      
	     return print (json_encode($resultado)); 
	}

	function logout()
	{
		unset( $_SESSION['id'],
			   $_SESSION['nombre'],
			   $_SESSION['email'],
			   $_SESSION['fecha_registro'],
			   $_SESSION['validado']);
		session_destroy(); //destruye la sesion
		header('location: http://192.168.86.129/blog');
	}////////////////////Fin de la funcion ///////////////////////////////////
}