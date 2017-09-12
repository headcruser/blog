<?php
 use core\lib\Vista;

/** @class: IndexController Index Principal
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
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