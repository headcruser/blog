<?php namespace core\help;
 
 /**
 * Clase que gestiona elementos de validacion
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
 }