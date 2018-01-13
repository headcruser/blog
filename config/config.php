<?php
//SYSTEM
define('DS', DIRECTORY_SEPARATOR);
define('PATH', dirname(__DIR__, 1).DS);
define('PATH_APP', PATH.'core'.DS);
define('CONTROLLERS', PATH_APP.'controller'.DS);
define('PATH_VIEW', PATH.'styles'.DS.'templates'.DS);
define('INDEX', dirname($_SERVER['PHP_SELF'])."/");

//STYLES
define('CSS', INDEX.'styles/css/');
define('JS', INDEX.'styles/js/');
define('IMG', INDEX.'styles/img/');


//DATABASE
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', 'admin120324');
define('DB_NAME', 'blog');
define('PUERTO', '3306');
define('ENCODING', 'utf8');
define('ENGINE', 'mysql');
