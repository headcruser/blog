<?php

use System\Route\Router;
use System\View\RendererInterface;
use System\View\SmartyViewFactory;

//SYSTEM
define('DS', DIRECTORY_SEPARATOR);
define('PATH', dirname(__DIR__, 1).DS);
define('CSS', 'css/');
define('JS', 'js/');
define('IMG', 'img/');

require PATH.DS.'vendor'.DS.'autoload.php';

return [
    // CONFIGURATION DATABASE
    'database.host'             =>'localhost',
    'database.user'             =>'root',
    'database.password'             =>'admin120324',
    'database.name'             =>'blog',
    'database.port'             =>'3306',

    // SMARTY CONFIGUTATION
    'smarty.templates'   =>PATH.'templates'.DS,
    'smarty.templates_c' =>PATH.'compiler'.DS,
    'smarty.cache'       =>PATH.'compiler'.DS.'cache'.DS,

    // Controllers
    'controllers' => [
      'index'=>\System\controller\indexController::class
    ],

    //System
    RendererInterface::class=> \DI\factory(SmartyViewFactory::class),
    Router::class=>DI\create(),

        // PDO CONNECTION
        \PDO::class=>function (\Psr\Container\ContainerInterface $c) {
            try {
                $conexion = new \PDO(
                    'mysql:host='.$c->get('database.host').';dbname='.$c->get('database.name'),
                    $c->get('database.user'),
                    $c->get('database.password'),
                    [
                            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                            ]
                );
            } catch (\PDOException $e) {
                die("ERROR: " . $e->getMessage());
            }
        }
];
