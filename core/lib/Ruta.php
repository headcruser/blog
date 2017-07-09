<?php namespace core\lib;
 use core\lib\Vista;

/** @class: Ruta (PHP4 & PHP5, with comments)
  * @project: PHP Input Filter
  * @author: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
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
								   "/auth"=>"AuthController",
								   "/registro"=>"registroController",
								   "/admin" =>"adminController",
								   "/usuario" =>"usuarioController");

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
				if( trim($ruta,'/')!="")
				{
					$pos = strpos($uri, trim($ruta, "/"));
					if($pos!==false)
					{
						$arrayParams  = array(); //array donde se guardaran los parametros de la web
                        $estado       = true; // estado de ruta
                        $controlador  = $cont;
                        $metodo       = "";
                        $cantidadRuta = count(explode("/", trim($ruta, "/")));
                        $cantidad     = count($paths);
                        if ($cantidad > $cantidadRuta) 
						{
                            $metodo = $paths[$cantidadRuta];
                            for ($i = 0; $i < count($paths); $i++) 
							{
                                if ($i > $cantidadRuta) {
                                    $arrayParams[] = $paths[$i];
                                }
                            }
                        }
                        $this->getController($metodo, $controlador, $arrayParams);
					}
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
	public function getController($metodo,$controlador,$params = null)
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
	public function incluirControlador($controlador)
	{
		if( ! file_exists(CONTROLLERS.$controlador.'.php') )
			die("Error al Cargar el controlador");
		
		require_once CONTROLLERS.$controlador.'.php';		
	}
	
}