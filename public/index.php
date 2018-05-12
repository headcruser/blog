<?php

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use System\View\RendererInterface;

$app=new System\App('config/config.php');
$render = $app->getContainer()->get(RendererInterface::class);
$render->assign('titulo', 'Bienvenido a página principal');
echo $render->render('home.index');
// $app->run(isset($_GET["uri"])?$_GET["uri"]:"/");
