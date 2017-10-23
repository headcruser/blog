<?php namespace core\model;

use core\lib\Model\Entity;

/** Modelo de la tabla Entrada
  * @class: AuthController 
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
final class Entradas extends Entity
{
  /*id|autor_id|url|titulo|texto|fecha|activa*/

  /**
   * Name Table
   * @var string
   */
  protected static $table='entradas';
}