<?php
	/**
	 *Archivo de configuración del sistema
	 * @author Headcruser
	 * @version 2017_v1
	 */

	/**Parametros de condiguracón de servidor */
	define('SERVIDOR','localhost');	
	define('USUARIO','conta');
	define('PASSWORD','123');		
	define('DB_NAME','blog');


	//Crea las rutas Globales
	define ('PATH_APP',RUTA_BASE."core/");
	define ('PATH',PATH_APP."path/");
	define ('CONFIG_DB',PATH_APP."ORM/");
	define ('MODELS',PATH_APP."model/");
	define ('PATH_VIEW',RUTA_BASE."styles/templates/");
	define ('SERVER','http://localhost/');
	define ('INDEX',dirname($_SERVER['PHP_SELF'])."/");

	define ('CSS',INDEX.'styles/css/');
	define ('JS',INDEX.'styles/js/');
	define ('IMG',INDEX.'styles/img/');
	define ('TEMPLATES',INDEX.'styles/templates/');