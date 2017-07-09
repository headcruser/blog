<?php
 use core\lib\Vista;
/**
* Clase controladora de la pagina principal de la página
*/
class indexController 
{
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog/admin');

		//template(dir/tpl), nombre variable , contenido variable
		return Vista::crear("home.index","titulo","Bienvenido a la pagina principal");
	}
}