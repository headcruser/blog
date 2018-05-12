<?php
chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

$app=new System\App('config/config.php');
print($app->getContainer()->get(\PDO::class));
// $app->run(isset($_GET["uri"])?$_GET["uri"]:"/");