<?php
    /**
     * Página de incio.
     * @filesource index
     * @author Daniel Martinez Sierra
     * @version 2017_v2
     */
    define("RUTA_BASE", dirname(realpath(__FILE__))."/");

    require_once 'vendor/autoload.php';
    include  'config/config.php';
    session_start();
    $_SESSION['on'] = true;

    use core\lib\Route\Router;

    $router=new Router();
    $router->submit();
    //die('location: '.$_SERVER['SERVER_NAME'].INDEX);
