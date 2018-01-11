<?php
use core\lib\Controllers\Controller;
use core\model\Entradas;
use core\model\Usuario;

/**
* indexController
*
* Control de la página principal del sistema.
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
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
        if (isset($_SESSION['nombre'])) {
            header('location: http://192.168.86.129/blog/admin');
        }

        $this->assign("titulo", "Bienvenido a la pagina principal");
        // $this->assign("datos", $this->container->get('dbEntrada')->findAll() );

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
