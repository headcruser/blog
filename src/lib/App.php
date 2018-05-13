<?php
namespace System;

use System\View\RenderView;
use System\Controllers\ActionControllerInterface;
use System\JsonFormat;
use System\Route\Router;

class App
{
    /**
     * controller for Application
     *
     * @var array
     */
    private $controllers=[];

    /**
     * $definition configutation
     *
     * @var string
     */
    private $definition;

    /**
     * $container
     *
     * @var Container
     */
    private $container;

    public function __construct(string $definition)
    {
        $this->definition = $definition;
    }

    /**
     * addController
     * Adding Controller from aplication
     *
     * @param  string $controller
     * @return App
     */
    public function addController(string $controller):self
    {
        $this->controllers[] = $controller;
        return $this;
    }

    /**
     * getContainer Dependency
     *
     * @return Container
     */
    public function getContainer()
    {
        if ($this->container === null) {
            $builder = new \DI\ContainerBuilder();
            $builder->writeProxiesToFile(true, dirname(__DIR__, 2).'/cache/temp/proxies');
            $builder->addDefinitions($this->definition);

            foreach ($this->controllers as $controller) {
                if ($controller::DEFINITIONS) {
                    $builder->addDefinitions($controller::DEFINITIONS);
                }
            }
            $this->container = $builder->build();
        }
        return $this->container;
    }

    /**
     * run
     * Execute to specific Controller
     * @param string $path
     * @return void
     */
    public function run(string $path)
    {
        try {
            foreach ($this->controllers as $controller) {
                $this->getContainer()->get($controller);
            }

            if (empty($path)) {
                   return header('Location', substr($path, 0, -1));
            }

            $route = $this->container->get(Router::class)->run($path);

            $controller = $this->getContainer()->get($route->buildNamespaceController());

            if (!$controller) {
                throw new \Exception("Controller Not exist", 1);
            }

            echo call_user_func_array([$controller,$route->getMethod()], $route->getMatches());
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
