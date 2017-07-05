<?php 
    /**
	 * CARGA LOS NAMESPACES
	 * @filesource core/autoload.php
	 * @author Daniel Martinez Sierra 
	 */

    session_start(); // Iniciamos la sesion

    //Ruta Principal del proyecto
	define ("RUTA_BASE",dirname(realpath(__FILE__))."/");  

	require_once 'vendor/autoload.php';

	//Incluye archivos de configuracion
    include  'config/config.php';

    use core\lib\Ruta;
    //Rutas Disponibles del sistema
	$ruta = new Ruta();
	$ruta->submit();