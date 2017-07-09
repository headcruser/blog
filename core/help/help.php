<?php namespace core\help;
 
 /**
 * Clase que gestiona elementos de validación
 */
 class help
 {
	/**
	  * Incluye los modelos de la base de datos
	  * @return type String Regresa el campo limpio
	  */
	 public static function validarCampo($campo)
	 {
	 	$campo = trim($campo);
	 	$campo = stripcslashes($campo);
	 	$campo = htmlspecialchars($campo);
	 	
	 	return $campo;
	 }

	/**
	* Valida el campo del formulario
	* @param String $name Recibe el nombre del campo del formulario
	* @return type String Regresa el campo limpio
	*/
	function input($name)
	{
		 $source = $_REQUEST[$name];
		 die($source);
		$re = new \core\lib\Request();
		return $re->input($name);
	}
 }