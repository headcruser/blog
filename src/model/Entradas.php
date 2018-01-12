<?php namespace core\model;

use core\lib\Model\Model;

/**
  * Entradas
  *
  * Modelo de la tabla Entrada.
  *
  * @version: php7
  * @author: Daniel Martinez <headcruser@gmail.com>
  * @copyright: Daniel Martinez
  * @license https://opensource.org/licenses/mit-license.php MIT License
  */
final class Entradas extends Model
{
  /*id|autor_id|url|titulo|texto|fecha|activa*/
    private $_id;
    private $_autor_id;
    private $_url;
    private $_titulo;
    private $_texto;
    private $_fecha;
    private $_activa;

    protected $properties = array('id',
                                'autor_id',
                                'url',
                                'titulo',
                                'texto',
                                'fecha',
                                'activa');
  /**
   * __construct
   *
   * Construye el modelo Entradas
   */
    public function __construct(
        string $id = null,
        string $autor_id = null,
        string $url = null,
        string $titulo = null,
        string $texto = null,
        string $fecha = null,
        string $activa = null
    ) {
        $this->_id=$id;
        $this->_autor_id=$autor_id;
        $this->_url=$url;
        $this->_titulo=$titulo;
        $this->_texto=$texto;
        $this->_fecha=$fecha;
        $this->_activa=$activa;
    }
  /**
   * Create
   *
   * Funcion statica que crea un objeto de la clase
   *
   * @return \core\model\Entradas Regresa un objeto de la clase
   */
    public static function create(
        string $id,
        string $autor_id,
        string $url,
        string $titulo,
        string $texto,
        string $fecha,
        string $activo
    ) : Entradas {
        return new static($id, $autor_id, $url, $titulo, $texto, $fecha, $activo);
    }
  //Getters
    public function getID()
    {
        return $this->_id;
    }
    public function getAutorID()
    {
        return $this->_autor_id;
    }
    public function getUrl()
    {
        return $this->_url;
    }
    public function getTitulo()
    {
        return $this->_titulo;
    }
    public function getTexto()
    {
        return $this->_texto;
    }
    public function getFecha()
    {
        return $this->_fecha;
    }
    public function getActiva()
    {
        return $this->_activa;
    }

  /**
   * __toString
   * @return string cadena que representa al objeto
   */
    public function __toString(): string
    {
        return  '<pre>'.
              'ID        :'.$this->_id.'<br>'.
              'AUTOR_ID  :'.$this->_autor_id.'<br>'.
              'URL       :'.$this->_url.'<br>'.
              'TITULO    :'.$this->_titulo.'<br>'.
              'TEXTO     :'.$this->_texto.'<br>'.
              'FECHA     :'.$this->_fecha.'<br>'.
              'ACTIVO    :'.$this->_activa;
    }
}
