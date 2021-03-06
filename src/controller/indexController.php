<?php
namespace App\controller;

use System\Controller;
use System\Route\Router;
use System\model\Usuario;
use System\model\Entradas;
use System\View\RendererInterface;

class IndexController extends Controller
{
    const DEFINITIONS = __DIR__.DIRECTORY_SEPARATOR.'config.php';

    private $renderer;

    public function __construct(Router $router, RendererInterface $renderer)
    {
        $this->renderer = $renderer;
        $router->get('/', 'index#index', 'blog.index');
                $router->get('/entradas', 'index#entradas', 'blog.entradas');
                $router->get('/entradas/:id', 'index#entradas', 'blog.entradas');
        $router->get('/favoritos', 'index#favoritos', 'blog.favoritos');
        $router->get('/autores', 'index#autores', 'blog.autores');
        $router->get('/articulo', 'index#articulo', 'blog.articulo');
    }
    /**
     * Muestra la pagina principal
     *
     * @return type void
     */
    public function index()
    {
        $this->renderer->assign('titulo', 'Bienvenido a página principal');
        return $this->renderer->render("home.index");
    }
    /**
     * Entradas
     *
     * Muestra una vista de las entradas en general
     *
     * @return Vista Muestra al usuario la vista.
     */
    public function entradas($id)
    {
        return $this->renderer->render('home.Entradas');
    }
    /**
     * Favoritos
     *
     * Muestra una vista de favoritos
     *
     * @return Vista Muestra al usuario la vista
     */
    public function favoritos()
    {
        return $this->renderer->render("home.Favoritos");
    }
    /**
     * Autores
     *
     * Muestra una vista de los autores de cada Blog
     *
     * @return Vista Muestra al usuario la vista Generada
     */
    public function autores()
    {
        //(dir.tpl), <nomVar> ,<Contenido>
        return $this->renderer->render("home.Autores");
    }
    /**
     * Articulo
     *
     * Muestra el contenido de una entrada
     *
     * @return Vista Muestra al usuario la vista.
     */
    public function articulo()
    {
        return $this->renderer->render('home.LeerArticulo');
    }
}
