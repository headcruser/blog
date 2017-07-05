<?php
use core\lib\Vista;

/**
 * Clase que se encarga de controlar el registro usuarios
 */
class registroController
{
	
	public function index()
	{
	   	return Vista::crear("registro.registro");
	}

	public function alta()
	{
		die("dando de alta");
	}
}