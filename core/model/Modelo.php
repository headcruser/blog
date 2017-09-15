<?php namespace core\model;

use core\ORM\EtORM;

/** Contiene un modelo generico para implementar una tabla en concreto 
  * @class: Modelo
  * @project: BlogProyect
  * @date: 15-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
abstract class Modelo extends EtORM
{
   
   /** Contiene las propiedades de manera Dinámica
    * @var array
    */
    private $data = array();

    /** Nombre de la tabla
    * @var string
    */
    protected static $table;


    /**
	 * Construye al objeto especificado la informacion
	 * @param array 	$data 			Información de la tabla a construir
     */
    function __construct(array $data = null)
    {
        $this->data = $data;
    }

    /**
	 * Método Magico para obtener los campos de los elementos
	 * @param string 		$nombre 			Nombre del argumento
     */
    function __get(string $name)
    {
        if (array_key_exists($name, $this->data)) 
        {
            return $this->data[$name];
        }
    }

    /**
	 * Método Magico para Establecer o modificar el valor especificado
     * @param string 		$name 			Nombre del argumento
     * @param string		$value 			Valor del argumento
     */
    function __set($name, $value){
        $this->data[$name] = $value;
    }

    /**
     * OBTIENE LA COLUMNAS DE LA TABLA 
     * @return type object Arreglo de objetos con las columnas especificadas
     */
    public function getColumnas(){
        return $this->data;
    }
}