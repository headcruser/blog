<?php namespace core\model;

use core\lib\Model\Entity;

/**
  * Comentario
  *
  * Modelo de la tabla Comentario
  *
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
final class Comentario
{
  /**id|autor_id|entrada_id|titulo|texto|fecha */
    private $id;
    private $autor_id;
    private $entrada_id;
    private $titulo;
    private $texto;
    private $fecha;
}