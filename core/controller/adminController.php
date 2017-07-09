<?php
use core\lib\Vista;
use core\model\Usuario;
/**
 * Clase encargada de gestionar a los administradores del sistema
 */
class adminController 
{
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{
		if(!$_SESSION['nombre'])
			header('location: http://192.168.86.129/blog');

		return Vista::crear("admin.admin");
	}

	/**
	 * Muestra El registro de usuario
	 * @return type void
	 */
	public function altaUsuario()
	{
		if(!$_SESSION['nombre'])
			header('location: http://192.168.86.129/blog');

		$variables=array('accion'=>1);
		//$variables['accion']=1;

		//Si envia datos, Agregar a la base de datos
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			
			/*Realizar Validaciones*/
			// $variables['mensaje']='<div class="alert alert-success" role ="alert">
			// 							<span class="glyphicon glyphicon-ok"></span> 
			// 							<b>El usuario se agrego con exito</b>
			// 							<b>Ya puedes acceder a la plataforma</b> 
			// 					</div>';

			// $usuario=new Usuario();

			// //insertar nuevo usuario
			
			// $usuario->nombre=$_POST['nombre'];
			// $usuario->email=$_POST['email'];
			// $usuario->password=$_POST['pasword'];
			// $usuario->fecha_registro = date("Y-m-d");
			// $usuario->activo="1";
			// $usuario->guardar();

			header('Content-type: application/json');
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");	
			$mensajeUsuario=array();

			if(isse($_POST['nombre'])){
				$mensajeUsuario=array("estado"=>"true","mensaje"=>"He recibido correctamente tu usuario");
			}else
			{
				$mensajeUsuario=array("estado"=>"false","mensaje"=>"No he correctamente tu nombre");
			}

			return print (json_encode($resultado));	
			//die("termine");
		}
		 //Se va a registrar
		
					
		return Vista::crear("admin.admin",'variables',$variables);
	}

	/**
	 * Muestra El registro de usuario
	 * @return type void
	 */
	public function adminUsuario()
	{
		if(!$_SESSION['nombre'])
			header('location: http://192.168.86.129/blog');

		$variables=array('accion'=>2);
		//$variables['accion']=1

		$usuario=new Usuario();
		$datos = $usuario->fetchAll(array("id","nombre","email"));
		$campos=$usuario->getNombresColumnas($datos);
		
		$variables['campos']=$campos;
		$variables['datos']=$datos;

		return Vista::crear("admin.admin",'variables',$variables);
	}
}