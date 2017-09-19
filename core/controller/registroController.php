<?php
use core\lib\Vista;
use core\model\Usuario;
use core\help\help;
/**
* Registro de nuevos usuarios
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class registroController
{
	
	public function index()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog/admin');

	   	return Vista::crear("registro.registro","titulo","Registro de usuarios");
	}

	public function alta()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog');

		//Si envia datos, Agregar a la base de datos
		if($_SERVER['REQUEST_METHOD']!='POST')
			return Vista::crear("error.error","error","Envia por metodo post ¬¬");

		$resultado=array();
		$validacion = new \GUMP();
		$_POST = $validacion->sanitize($_POST);
		
		$validacion->validation_rules(array(
			'nombre'    => 'required|max_len,30|min_len,4',
			'email'       => 'required|valid_email',
			'pasword'    => 'required|max_len,8|min_len,4',
			'pasword2'    => 'required|max_len,8|min_len,4',));

		$validacion->filter_rules(array(
			'nombre' => 'trim|sanitize_string',
			'email'    => 'trim|sanitize_email',
			'pasword' => 'trim',
			'pasword2' => 'trim',));

		$is_valid = $validacion->is_valid($_POST, array(
			'pasword'  => 'required|max_len,100|min_len,6',
			'pasword2' => 'equalsfield,pasword',));

		$validated_data = $validacion->run($_POST);

		if($validated_data === false) 
		{
			header('Content-type: application/json');
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");
			$resultado=array("estado"=>"false","mensaje"=>$validacion->get_readable_errors(true));
			return print (json_encode($resultado));
			//die( $validacion->get_readable_errors(true) );
		}
		
		if($is_valid !== true) 
		{
			header('Content-type: application/json');
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");
			$resultado=array("estado"=>"false","mensaje"=>$is_valid);
			return print (json_encode($resultado));
			//die(print_r( $is_valid ));
		}

		header('Content-type: application/json');
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");
		$resultado=array("estado"=>"true","mensaje"=>"Validación Aceptada");
		return print (json_encode($resultado)); 
		
		// $usuario=new Usuario();
		// try
		// {	
		// 	//insertar nuevo usuario
		// 	$usuario->nombre=$_POST['nombre'];
		// 	$usuario->email=$_POST['email'];
		// 	$usuario->password=password_hash($_POST['pasword'], PASSWORD_DEFAULT);
		// 	$usuario->fecha_registro = date("Y-m-d");
		// 	$usuario->activo="1";
		// 	$usuario->guardar();
		// }
		// catch(Exception $e){
		// 	Vista::crear("error.error","error",$e->getMessage());
		// }
		
		// if($usuario->login($_POST['email'],$_POST['pasword']))
		// 	header('location: http://192.168.86.129/blog/admin');
	}
}