<?php namespace core\model;

	use core\model\Modelo;
	
/** Modelo de la tabla Usuario 
  * @class: Usuario
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
	final class Usuario extends Modelo
	{
	 	//$id $nombre $email $password $fecha_registro $activo;
    	protected static $table='usuarios';
	}