<?php
 use core\lib\Vista;

/**
* Control de la página principal del sistema.
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
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