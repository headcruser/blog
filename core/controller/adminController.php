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

		return Vista::crear("admin.index");
	}
}