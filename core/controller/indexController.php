<?php
namespace core\controller;

use core\model\Usuario;
use core\model\Entradas;
use System\View\RendererInterface;
use System\Route\Router;

class indexController
{
    private $router;
    private $renderer;

    public function __construct(Router $router, RendererInterface $renderer)
    {
        $this->router=$router;
        $this->renderer=$renderer;
        $this->router->get('/', 'index#index', 'blog.index');
        $this->router->get('/entradas', 'index#entradas', 'blog.entradas');
        $this->router->get('/favoritos', 'index#favoritos', 'blog.favoritos');
        $this->router->get('/autores', 'index#autores', 'blog.autores');
        $this->router->get('/articulo', 'index#articulo', 'blog.articulo');
    }
    /**
     * Muestra la pagina principal
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
     * @return Vista Muestra al usuario la vista.
     */
    public function entradas()
    {
        return $this->renderer->render('home.Entradas');
    }
    /**
     * Favoritos
     *
     * Muestra una vista de favoritos
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
     * @return Vista Muestra al usuario la vista.
     */
    public function articulo()
    {
        return $this->renderer->render('home.LeerArticulo');
    }
}
