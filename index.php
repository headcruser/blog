<?php
require_once 'vendor/autoload.php';
include  'config/config.php';
session_start();

use System\App;

$app=new App();
$app->run(isset($_GET["uri"])?$_GET["uri"]:"/");