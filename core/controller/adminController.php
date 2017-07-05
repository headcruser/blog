<?php
use core\lib\Vista;
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
}