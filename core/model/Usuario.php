<?php namespace core\model;

use core\lib\Model\Entity;
	
/** Modelo de la tabla Usuario 
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
//id|nombre|email|password|fecha_registro|activo;
  final class Usuario extends Entity
{
  protected static $table='usuarios';    
  /**
   * getNombre
   * 
   * Devuelve el valor de la propiedad especificada 
   *  strtoupper($this->properties['name']); Devuelve el valor en mayuscula
   * @param string $name 
   * @return object|null Regresa el valor de la propiedad Especificada,
   * en caso de no existir ni un método o propiedad con el nombre se regresa null
   */
  public function getNombre()
  {
    return $this->properties['nombre'];
  }
  /**
   * setNombre
   * 
   * Se aplica la logica de negocio para poder 
   * Realizar las validaciones del campo
   * @param string $name Nombre de la propiedad
   * @param mixed $valor Valor que se le va a asignar
   * @return void No regresa Ningún valor posible
   */
  public function setNombre($name, $valor)
  {
      $this->properties['nombre'] = trim(strip_tags($valor));
  }
}