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
		return Vista::crear("admin.admin");
	}

	/**
	 * Muestra El registro de usuario
	 * @return type void
	 */
	public function altaUsuario()
	{	
		$variables=array();

		//Si envia datos, Agregar a la base de datos
		if($_POST)
		{
			/*Realizar Validaciones*/
			$variables['mensaje']='<div class="alert alert-success" role ="alert">
										<span class="glyphicon glyphicon-ok"></span> 
										<b>El usuario se agrego con exito</b>
										<b>Ya puedes acceder a la plataforma</b> 
								</div>';

			// $usuario=new Usuario();

			// //insertar nuevo usuario
			
			// $usuario->nombre=$_POST['nombre'];
			// $usuario->email=$_POST['email'];
			// $usuario->password=$_POST['pasword'];
			// $usuario->fecha_registro = date("Y-m-d");
			// $usuario->activo="1";
			// $usuario->guardar();
			die("Termine");		
		}
		 //Se va a registrar
		$variables['accion']=1;
					
		return Vista::crear("admin.admin",'variables',$variables);
	}
}