<?php namespace core\lib\Autentication; 
use core\ORM\EtORM;
use core\lib\Autentication\Register;

/** @class: Sistema De autenticacion
  * @project: BlogProyect
  * @date: 29-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class AutenticationService extends EtORM implements Register
{ 
  /**
	 * Crea una Instancia del servico 
	 * @return type Register Regresa una implementacion de Register
	 */
  public static function create() : Register
  {
      return new static();
  }

 /**
	 * Inicia sesion el usuario
	 * @param String 		$email 			Correo del usuario
	 * @param String 		$password 		Clave del usuario
	 * @return type boolean Regresa true si es valido| en caso contrario false
	 */
  public function login(string $email,string $password):bool
  { 
    /**Ejecuto el procedimiento Almacenado PA_LOGIN*/
    $usuarioLogin=$this->checkUser($email);
    
    //Esta vacio
    if(!isset($usuarioLogin[0]))
        return false;

      //La constraseña no coincide
    if (!password_verify($password, $usuarioLogin[0]['password']))
        return false;
    
    $this->addSession($usuarioLogin);
    
    return true;
  }
  /**
	 * logout
	 * 
	 * Finaliza la sesion del usuario.
	 * @return void 
	 */
  function logout()
  {
    $this->clearSession();
    session_destroy(); //destruye la sesion
  }
   /**
    * checkUser
    *
    * Revisa si el correo del usuario se encuentra en la base de datos
    * mediante un procedimiento almacenado
    * @param string $email Email a verificar en la base de datos
    * @return array Regresa un arreglo con la información del email de la base de datos
    */
   private function checkUser(string $email):array
   {
      return self::Ejecutar("PA_LOGIN",array($email)); 
   }
   /**
    * addSession
    *
    * Agrega una sesion a la superGlobal Session
    * @param mixed $dataUser 
    * @return mixed 
    */
   private function addSession(array $dataUser)
   {
      $this->clearSession();
      $_SESSION['id']=$dataUser[0]['id'];
      $_SESSION['nombre']=$dataUser[0]['nombre'];
      $_SESSION['email']=$dataUser[0]['email'];
      $_SESSION['fecha_registro']=$dataUser[0]['fecha_registro'];
      $_SESSION['validado']=true;
   }
   /**
    * clearSession
    * 
    * Vacia la informacion de la superGlobal $_SESSION
    * @return void
    */
   private function clearSession()
   {
      unset(  $_SESSION['id'],
              $_SESSION['nombre'],
              $_SESSION['email'],
              $_SESSION['fecha_registro'],
              $_SESSION['validado']
            );
   }   
}