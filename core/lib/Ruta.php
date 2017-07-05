<?php namespace core\lib;
 use core\lib\Vista;
/**
 * Clase que gestiona la carga de rutas
 * @author Headcruser
 * @version 2017_v1
 */
class Ruta
{

	public $_controllers=array();

	/**
	 * Carga la vista de la página mostrada al usuario.
	 * @return type void
	 */
	public function submit()
	{
		//this referencia al objeto instanciado de la clase
		$this->_controllers=array( "/"=>"indexController",
								   "/home"=>"indexController",
								   "/home/login"=>"indexController",
								   "/registro"=>"registroController",
								   "/admin" =>"adminController");

		//condicion?proceso:no proceso
		$uri=isset($_GET["uri"])?$_GET["uri"]:"/";

		//divide la ruta
		$paths=explode('/', $uri);

		
		//¿No es el index? , entonces es un controlador
		if($uri!="/")
		{

			//Controladores y metodos
			$estado=false;
			foreach ($this->_controllers as $ruta => $cont) 
			{
				if( trim($ruta,'/') == $paths[0])
				{
					$estado=true;
					$controlador=$cont;
					$metodo = "";

					if( count($paths) > 1)
						$metodo=$paths[1];

					
					$this->getController($metodo,$controlador);
				}
			}
			
			if( $estado == false)
				return Vista::crear("error.error","error","La Ruta no existe");
			
		}else
		{
			//Carga el index principal
			$res=array_key_exists('/',$this->_controllers);

			if($res !="" && $res == 1)
			{
				foreach ($this->_controllers as $ruta => $controller) 
					if( $ruta == "/")
						$controlador=$controller;
				
				//llamar al controlador
				$this->getController('index',$controlador);
			}
		}
	}

	/**
	 * Obtiene el controlador seleccionado 
	 * @param type $metodo Es la funcion a ejecutar  
	 * @param type $controlador Es el control a cargar 
	 * @return type void 
	 */
	public function getController($metodo,$controlador)
	{
		$metodoControler="";

		if( $metodo == "index" || $metodo == "" )
			$metodoControler='index';
		else
			$metodoControler=$metodo;
		
		$this->incluirControlador($controlador);


		if( ! class_exists($controlador))
			return Vista::crear("error.error","error","La clase no existe");

		$claseTemporal=new $controlador();

		if( ! is_callable(array($claseTemporal,$metodoControler)))
			return Vista::crear("error.error","error","El método no existe");

		//llama al metodo en cuestion
		$claseTemporal->$metodoControler();
	}

	/**
	 * Incluye los controladores de la aplicación
	 * @param type $controlador Nombre del controlador a cargar
	 * @return type Void
	 */
	public function incluirControlador($controlador)
	{
		if( ! file_exists(PATH_APP.'controller/'.$controlador.'.php') )
			die("Error al Cargar el controlador");
		
		require_once PATH_APP.'controller/'.$controlador.'.php';		
	}
	
}