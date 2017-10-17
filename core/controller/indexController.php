<?php
use core\lib\Controllers\Controller;
use core\model\Entradas;
use core\model\Usuario;
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

		$entradas=new Entradas();
		$datos = $entradas->fetchAll();
		$campos=$entradas->getNombresColumnas($datos);

		$this->assign("titulo","Bienvenido a la pagina principal");
		$this->assign("datos",$datos);
		$this->assign("campos",$campos);
		
		return $this->renderView("home.index");
	}
	/**
	 * Entradas
	 *
	 * Muestra una vista de las entradas en general
	 * @return Vista Muestra al usuario la vista.
	 */
	public function entradas()
	{		
		return $this->renderView('home.Entradas');
	}
	/**
	 * Favoritos
	 *
	 * Muestra una vista de favoritos
	 * @return Vista Muestra al usuario la vista
	 */
	public function favoritos()
	{
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
	/**
	 * Articulo
	 *
	 * Muestra el contenido de una entrada
	 * @return Vista Muestra al usuario la vista.
	 */
	public function articulo()
	{		
		return $this->renderView('home.LeerArticulo');
	}
}