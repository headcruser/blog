<?php namespace core\model;

use core\lib\Model\Model;

/**
  * Modelo Usuario
  *
  * Esta clase define al modelo Usuarios.
  *
  * @version: php7
  * @author: Daniel Martinez <headcruser@gmail.com>
  * @copyright: Daniel Martinez
  * @license https://opensource.org/licenses/mit-license.php MIT License
  */
final class Usuario extends Model
{
  /**id|nombre|email|password|fecha_registro|activo;*/
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;
    protected $properties = array('id',
                                'nombre',
                                'email',
                                'password',
                                'fecha_registro',
                                'activo');
  /**
   * __construct
   *
   * Construye el modelo Entradas
   * @var mixed
   */
    public function __construct(
        string $idUser = null,
        string $nomb = null,
        string $email = null,
        string $pass = null,
        string $fecha = null,
        string $act = null
    ) {
        $this->id=$this->clearInput($idUser);
        $this->nombre=$this->clearInput($nomb);
        $this->email=$this->clearInput($email);
        $this->password=$this->clearInput($pass);
        $this->fecha_registro=$this->clearInput($fecha);
        $this->activo=$this->clearInput($act);
    }

  /**
   * Create
   *
   * Funcion statica que crea un objeto de la clase
   *
   * @param string id
   * @param string nomb
   * @param string email
   * @param string pass
   * @param string fecha
   * @param string activo
   *
   * @return \core\model\Usuario
   */
    public static function create(
        string $userID,
        string $nomb,
        string $email,
        string $pass,
        string $fecha,
        string $activo
    ) : Usuario {
        return new static($userID, $nomb, $email, $pass, $fecha, $activo);
    }
  //Getters
    public function getId()
    {
        return $this->id;
    }
    public function getNombre():string
    {
        return $this->nombre;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getPassword():string
    {
        return $this->password;
    }
    public function getFecha():string
    {
        return $this->fecha_registro;
    }
    public function getActivo():string
    {
        return $this->activo;
    }
  /**
   * __toString
   * @return string cadena que representa al objeto
   */
    public function __toString(): string
    {
        return  '<pre>'.
              'ID        :'.$this->id.'<br>'.
              'NOMBRE    :'.$this->nombre.'<br>'.
              'EMAIL     :'.$this->email.'<br>'.
              'PASSWORD  :'.$this->password.'<br>'.
              'FECHA     :'.$this->fecha_registro.'<br>'.
              'ACTIVO    :'.$this->activo;
    }

    public function setPassword(string $passUser)
    {
        $this->password= $this->clearInput($passUser);
        $this->password= password_hash($passUser, PASSWORD_DEFAULT);
    }
}
