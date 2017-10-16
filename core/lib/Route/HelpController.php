<?php namespace core\lib\Route;
use core\lib\Route\RouterException\ClassNoFoundException;
use core\lib\Route\RouterException\MethodNoFoundException;
use core\Exception\NoFoundControllerException;

trait HelpController
{
    /**
	 * Obtiene el controlador seleccionado 
	 * @param string $metodo Es la funcion a ejecutar  
	 * @param string $controlador Es el control a cargar 
     * @param mixed $params Obtiene los parametros a establecer
	 * @return type void 
	 */
    public function getController(string $metodo,string $controlador,$params = null)
	{
		$metodoControler="index";

		if(! $this->isIndex( $metodo ) )
			$metodoControler=$metodo;
        
        $this->incluirControlador( $controlador );
        $this->executeController( $controlador,$metodoControler,$params );		
    }
    /**
     * isIndex
     * 
     * Revisa si la cadena contiene index o viene vacia 
     * Si se cumplen Ambos casos retorna True.
     * @param string $name 
     * @return bool 
     */
    private function isIndex(string $name):bool
    {
        return $name === "index" || $name === "";
    }
	/**
	 * Incluye los controladores de la aplicación
	 * @param type $controlador Nombre del controlador a cargar
	 * @return type Void
	 */
	private function incluirControlador($controlador)
	{
		if( ! file_exists(CONTROLLERS.$controlador.'.php') )
            throw new NoFoundControllerException(['reason' => "El controlador no existe"]);
		
		require_once CONTROLLERS.$controlador.'.php';		
    }
    /**
     * executeController
     * 
     * Ejecuta el metodo Especificado
     * @param string $controller        Nombre del controlador
     * @param string $methodContoller   Nombre del metodo del controlador
     * @param array|null $params        Numero de Parametros
     * @return mixed 
     */
    private function executeController($controller,$methodContoller,$params)
    {
        if( ! class_exists($controller))
            throw new ClassNoFoundException(['reason' => "La Clase no existe"]);

        $claseTemporal=new $controller();

        if( ! is_callable(array($claseTemporal,$methodContoller)))
            throw new MethodNoFoundException(['reason' => "El Método no existes"]);

        if (!  $this->isIndex($methodContoller) ) 
            return call_user_func_array(array($claseTemporal, $methodContoller), $params);		        
        
        if (count($params) == 0) 
            $claseTemporal->$methodContoller();
    }
}