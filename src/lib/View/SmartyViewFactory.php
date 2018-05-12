<?php
namespace  System\View;

use Smarty;
use System\View\SmartyRenderer;
use Psr\Container\ContainerInterface;

class SmartyViewFactory
{
    public function __invoke(ContainerInterface $container):SmartyRenderer
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir($container->get('smarty.templates'));
        $smarty->setCompileDir($container->get('smarty.templates_c'));
        $smarty->setCacheDir($container->get('smarty.cache'));
        return new SmartyRenderer($smarty);
    }
}
