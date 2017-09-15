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

	/**
	 * METODO PARA CREAR UNA SESION PARA EL USUARIO
	 * @param String 		$email 			Correo del usuario
	 * @param String 		$password 		Clave del usuario
	 * @return type boolean Regresa true si es valido| en caso contrario false
	 */
	function login($email,$password)
	{
	   $flag=false;

	   /**Ejecuto el procedimiento Almacenado PA_LOGIN*/
	   $usuarioLogin= self::Ejecutar("PA_LOGIN",array($email));

	   //Esta vacio
	   if(!isset($usuarioLogin[0]))
	   		return $flag;

	   	//La constraseña no coincide
	   if (!password_verify($password, $usuarioLogin[0]['password']))
	   		return $flag;
	   

	   $flag=true;
	   $_SESSION['id']=$usuarioLogin[0]['id'];
 	   $_SESSION['nombre']=$usuarioLogin[0]['nombre'];
 	   $_SESSION['email']=$usuarioLogin[0]['email'];
 	   $_SESSION['fecha_registro']=$usuarioLogin[0]['fecha_registro'];
 	   $_SESSION['validado']=true;
	   
	  return $flag;
	} 
	
}