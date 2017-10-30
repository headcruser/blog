<?php namespace core\model;

use core\lib\Model\Model;
/**
  * Comentario
  *
  * Modelo de la tabla Comentario
  *
  * @version: php7
  * @author: Daniel Martinez <headcruser@gmail.com>
  * @copyright: Daniel Martinez
  * @license https://opensource.org/licenses/mit-license.php MIT License
  */
final class Comentario extends Model
{
  /**id|autor_id|entrada_id|titulo|texto|fecha */
  private $_id;
  private $_autor_id;
  private $_entrada_id;
  private $_titulo;
  private $_texto;
  private $_fecha;

  protected $properties = array('id',
                                'autor_id',
                                'entrada_id',
                                'titulo',
                                'texto',
                                'fecha');
    
  public function __construct(string $id=null,
                              string $autor_id=null,
                              string $entrada_id=null,
                              string $titulo=null,
                              string $texto=null,
                              string $fecha=null){
    $this->_id=$id;
    $this->_autor_id=$autor_id;
    $this->_entrada_id=$entrada_id;
    $this->_titulo=$titulo;
    $this->_texto=$texto;
    $this->_fecha=$fecha;
  }

  /**
   * Create
   * 
   * Funcion statica que crea un objeto de la clase
   * 
   * @return \core\model\Comentario
   */
  public static function create(string $id,
                                string $autor_id,
                                string $entrada_id,
                                string $titulo,
                                string $texto,
                                string $fecha) : Comentario {
    return new static($id,$autor_id,$entrada_id,$titulo,$texto,$fecha);
  }
  //Getters
  public function getID(){        return $this->_id;        }
  public function getAutorID(){   return $this->_autor_id;  }
  public function getEntradaID(){       return $this->_entrada_id; }
  public function getTitulo(){    return $this->_titulo;    }
  public function getTexto(){     return $this->_texto;     }
  public function getFecha(){     return $this->_fecha;     }  
  /**
   * __toString
   * @return string cadena que representa al objeto 
   */
  public function __toString(): string
  {
      return  '<pre>'.
              'ID        :'.$this->_id.'<br>'.
              'AUTOR_ID  :'.$this->_autor_id.'<br>'.
              'ENTRADA_ID:'.$this->_entrada_id.'<br>'.
              'TITULO    :'.$this->_titulo.'<br>'.
              'TEXTO     :'.$this->_texto.'<br>'.
              'FECHA     :'.$this->_fecha.'<br>';
  }
}