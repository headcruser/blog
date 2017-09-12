<?php
use core\lib\Vista;
use core\model\Usuario;

 /** @class: AdminController 
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
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