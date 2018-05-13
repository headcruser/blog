<?php

chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';
$app=(new System\App('config/config.php'))
        ->addController(App\controller\IndexController::class);
$app->run(isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:"/");
