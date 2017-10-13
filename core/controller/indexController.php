<?php
use core\lib\Controllers\Controller;
/**
* Control de la página principal del sistema.
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class indexController extends Controller
{
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{
		if(isset($_SESSION['nombre']))
			header('location: http://192.168.86.129/blog/admin');

		//(dir.tpl), <nomVar> ,<Contenido>
		return $this->renderView("home.index","titulo","Bienvenido a la pagina principal");
	}
	/**
	 * Entradas
	 *
	 * Muestra una vista de las entradas en general
	 * @return Vista Muestra al usuario la vista.
	 */
	public function entradas()
	{
		//(dir.tpl), <nomVar> ,<Contenido>
		return $this->renderView("home.Entradas");
	}
	/**
	 * Favoritos
	 *
	 * Muestra una vista de favoritos
	 * @return Vista Muestra al usuario la vista
	 */
	public function favoritos()
	{
		//(dir.tpl), <nomVar> ,<Contenido>
		return $this->renderView("home.Favoritos");
	}
	/**
	 * Autores
	 *
	 * Muestra una vista de los autores de cada Blog
	 * @return Vista Muestra al usuario la vista Generada 
	 */
	public function autores()
	{
		//(dir.tpl), <nomVar> ,<Contenido>
		return $this->renderView("home.Autores");
	}
}