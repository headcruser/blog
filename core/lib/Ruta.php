<?php namespace core\lib;
 use core\lib\Vista;
 use core\Exception\NoFoundControllerException;

/** @class: Ruta (Gestiona el routing) 
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class Ruta
{
	public $_controllers;

	/**
	 * __construct
	 * 
	 * Constructor de la clase Ruta.
	 * @return mixed 
	 */
	public function __construct()
	{
		$this->_controllers=array( "/"=>"indexController",
								   "/home"=>"indexController",
								   "/auth"=>"AuthController",
								   "/registro"=>"registroController",
								   "/admin" =>"adminController",
								   "/usuario" =>"usuarioController");
	}
	/**
	 * Carga la vista de la página mostrada al usuario.
	 * @return type void
	 */
	public function submit()
	{
		//condicion?proceso:no proceso
		$uri=isset($_GET["uri"])?$_GET["uri"]:"/";

		if($uri!="/")
			$this->readerPath($uri);
		else
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
	 * readerPar
	 * 
	 * Lee la ruta especificada por el usuario
	 * @param array $ruta Contiene la ruta del usuario
	 * @return mixed 
	 */
	public function readerPath(string $uri)
	{
		$dividePaths=$this->dividePaths($uri);
		//Controladores y metodos
		$estado=false;
		foreach ($this->_controllers as $ruta => $cont) 
		{
			if( trim($ruta,'/')!="")
			{
				$pos = strpos($uri, trim($ruta, "/"));
				if($pos!==false)
				{
					$arrayParams  = array(); //array donde se guardaran los parametros de la web
					$estado       = true; // estado de ruta
					$controlador  = $cont;
					$metodo       = "";
					$cantidadRuta = $this->numRoutes($ruta);
					$cantidad     = count($dividePaths);
					if ($cantidad > $cantidadRuta) 
					{
						$metodo = $dividePaths[$cantidadRuta];
						for ($i = 0; $i < count($dividePaths); $i++) 
						if ($i > $cantidadRuta)
						$arrayParams[] = $dividePaths[$i];
					}
					$this->getController($metodo, $controlador, $arrayParams);
				}
			}
		}
		if( $estado == false)
		return Vista::crear("error.error","error","La Ruta no existe");
	}
	
	/**
	 * dividePaths
	 *  
	 * Divide una cadena a partir del delimitator '/'. 
	 * Por ejemplo: "/index/html"
	 * array(index,html);
	 * @param string Cadena que se va a dividir en un array de rutas
	 * @return array Regresa un arreglo con la cadena dividida
	 */
	private function dividePaths(string $url):array
	{
		return explode('/', $url);
	}

	/**
	 * NumRoutes
	 *  
	 * Cuenta el numero de rutas encontradas en la cadena
	 * Por ejemplo: "/index/login"
	 * resultado=2 (index, login);
	 * @param string Cadena que se va a dividir en un array de rutas
	 * @return array Regresa un arreglo con la cadena dividida
	 */
	private function numRoutes(string $path): int
	{
		return count(explode("/", trim($path, "/")));
	}


	/**
	 * Obtiene el controlador seleccionado 
	 * @param type $metodo Es la funcion a ejecutar  
	 * @param type $controlador Es el control a cargar 
	 * @return type void 
	 */
	private function getController($metodo,$controlador,$params = null)
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


		if ($metodoControler == "index") 
		{
			if (count($params) == 0) 
			{
				//llama al metodo en cuestion
				$claseTemporal->$metodoControler();		
			} else {
				die("error en parametros");
			}
		} else {
			call_user_func_array(array($claseTemporal, $metodoControler), $params);
		}
	}

	/**
	 * Incluye los controladores de la aplicación
	 * @param type $controlador Nombre del controlador a cargar
	 * @return type Void
	 */
	private function incluirControlador($controlador)
	{
		if( ! file_exists(CONTROLLERS.$controlador.'.php') )
			throw new NoFoundControllerException(['driver' => get_class($driver)]);
		
		require_once CONTROLLERS.$controlador.'.php';		
	}
	
}