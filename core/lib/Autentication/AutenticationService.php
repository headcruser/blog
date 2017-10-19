<?php namespace core\lib\Autentication; 
use core\ORM\EtORM;
use core\lib\Autentication\Register;
use core\lib\ManagerSession\Session;

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
  private $session; 
  
  public function __construct(Session $managerSession)
  {
    $this->session=$managerSession;
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
    if(!isset($usuarioLogin['id']))
        return false;

      //La constraseña no coincide
    if (!password_verify($password, $usuarioLogin['password']))
        return false;
      
    $this->addSession($usuarioLogin);
    
    return true;
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
     $arrayUser=self::Ejecutar("PA_LOGIN",array($email)); 
      return $arrayUser[0];
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
      $this->session->addValue('id',$dataUser['id']);
      $this->session->addValue('nombre',$dataUser['nombre']);
      $this->session->addValue('email',$dataUser['email']);
      $this->session->addValue('fecha_registro',$dataUser['fecha_registro']);
      $this->session->addValue('validado',true);
   }
   /**
    * logout
    * 
    * Finaliza la sesion del usuario.
    * @return void 
    */
   function logout()
   {
     $this->session->destroy();
   }
}