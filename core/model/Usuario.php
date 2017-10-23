<?php namespace core\model;	
/** 
  * Modelo Usuario 
  *
  * Esta clase define al modelo Usuarios, implementando 
  * Validaciones sin realizar validaciones adicionales
  * @class: Usuario
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
final class Usuario
{
  /**id|nombre|email|password|fecha_registro|activo;*/

    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;

  public function __construct(string $idUser=null,
                              string $nomb=null,
                              string $email=null,
                              string $pass=null,
                              string $fecha=null,
                              string $act=null)
  {
    $this->id=$idUser;
    $this->nombre=$nomb;
    $this->email=$email;
    $this->password=$pass;
    $this->fecha_registro=$fecha;
    $this->activo=$act;
  }

  public static function create(string $userID,
                                string $nomb,
                                string $email,
                                string $pass,
                                string $fecha,
                                string $activo) : Usuario
  {
      return new static($userID,$nomb,$email,$pass,$fecha,$activo);
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($idValor)
  {
      $this->id= trim(strip_tags($idValor));
  }
  public function getNombre():string
  {
    return $this->nombre;
  }
  public function setNombre(string $nameUser)
  {
      $this->nombre = trim(strip_tags($nameUser));
  }

  public function getEmail():string
  {
    return $this->email;
  }

  public function setEmail(string $emailUser)
  {
      $this->email = trim(strip_tags($emailUser));
  }

  public function getPassword():string
  {
    return $this->password;
  }

  public function setPassword(string $passUser)
  {
      $this->password = trim(strip_tags($passUser));
  }

  public function getFecha():string
  {
    return $this->fecha_registro;
  }

  public function setFecha(string $fechaReg)
  {
      $this->fecha_registro = trim(strip_tags($fechaReg));
  }

  public function getActivo():string
  {
    return $this->activo;
  }

  public function setActive(string $fechaReg)
  {
      $this->activo = trim(strip_tags($fechaReg));
  }

}