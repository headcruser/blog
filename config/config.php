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


	//Crea las rutas del motor de la aplicacion
	define ('PATH_APP',RUTA_BASE."core/");
	define ('CONTROLLERS',PATH_APP.'controller/');
	define ('PATH_VIEW',RUTA_BASE."styles/templates/");

	//Ruta principal
	define ('INDEX',dirname($_SERVER['PHP_SELF'])."/");

	//Constantes para sytles
	define ('CSS',INDEX.'styles/css/');
	define ('JS',INDEX.'styles/js/');
	define ('IMG',INDEX.'styles/img/');
	define ('TEMPLATES',INDEX.'styles/templates/');