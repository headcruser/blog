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
	/**
	 * Modules for Application
	 * @var array
	 */
	private $modules=[];

	/**
	 * $definition configutation
	 *
	 * @var string
	 */
	private $definition;

	private $container;

	private $controllers=[];
	/**
	* Reference Router Class
	* @var Router
	*/
	private $router;

	public function __construct(string $definition)
	{
		$this->definition = $definition;
	}

	 /**
     * getContainer
     *
     * @return Container
     */
    public function getContainer()
    {
			if ($this->container === null) {
				$builder = new \DI\ContainerBuilder();
				$builder->writeProxiesToFile(true, dirname(__DIR__, 2).'/cache/temp/proxies');
				$builder->addDefinitions($this->definition);
				$this->container = $builder->build();
			}
			return $this->container;
    }


}
