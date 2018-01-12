<?php
require_once 'vendor/autoload.php';
include  'config/config.php';
session_start();

use System\Route\Router;

$router=new Router(isset($_GET["uri"])?$_GET["uri"]:"/");
$router->get('/', 'index#index', 'blog.index');
$router->run();
