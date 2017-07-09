<?php
use core\lib\Vista;
use core\model\Usuario;
use core\help\help;

/**
 * Clase que se encarga de controlar el registro usuarios
 */
class registroController
{
	
	public function index()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog/admin');

	   	return Vista::crear("registro.registro");
	}

	public function alta()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog');

		//Si envia datos, Agregar a la base de datos
		if($_SERVER['REQUEST_METHOD']!='POST')
			return Vista::crear("error.error","error","Envia por metodo post ¬¬");
		
		$usuario=new Usuario();
		try
		{	
			//insertar nuevo usuario
			$usuario->nombre=$_POST['nombre'];
			$usuario->email=$_POST['email'];
			$usuario->password=password_hash($_POST['pasword'], PASSWORD_DEFAULT);
			$usuario->fecha_registro = date("Y-m-d");
			$usuario->activo="1";
			$usuario->guardar();
		}
		catch(Exception $e){
			Vista::crear("error.error","error",$e->getMessage());
		}
		
		if($usuario->login($_POST['email'],$_POST['pasword']))
			header('location: http://192.168.86.129/blog/admin');
	      	

	}
}