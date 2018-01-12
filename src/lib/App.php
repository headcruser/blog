<?php
namespace System;

use System\View\RenderView;
use System\Controllers\ActionControllerInterface;
use System\JsonFormat;
use System\Route\Router;
use core\Exception\GenericException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use core\controller\indexController;

class App
{
    private $container;
    private $controllers=[];
    /**
    * Reference Router Class
    * @var Router
    */
    private $router;

    public function __construct()
    {
        $this->container = new ContainerBuilder();
        $loader = new YamlFileLoader(
            $this->container,
            new FileLocator(PATH . 'config')
        );
        $loader->load('services.yml');

        $this->container->get('render')->addGlobal(
            'router',
            $this->container->get('router')
        );

        $this->controllers[indexController::class]=new
            indexController($this->container->get('router'), $this->container->get('render'));
    }

    public function run(string $path)
    {
        try {
            $var= $this->container->get('router')->run($path);
            $params=explode('#', $var->getCallback());
            $controller="core\\controller\\".$params[0]."Controller";

            if (!array_key_exists($controller, $this->controllers)) {
                throw new \Exception("Controller Not exist", 1);
            }
            call_user_func_array([$this->controllers[$controller],$params[1]], $var->getMatches());
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
