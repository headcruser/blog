<?php namespace core\lib\Model;

use core\ORM\EtORM;
use core\lib\Model\Inflector;

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
abstract class Entity extends EtORM
{
   use Inflector;

   /** Contiene las propiedades de manera Dinámica
    * @var array
    */
    protected $properties = array();

    /** Nombre de la tabla
    * @var string
    */
    protected static $table;
    /**
	 * Construye al objeto especificado la informacion
	 * @param array 	$data 			Información de la tabla a construir
     */
    public function __construct(array $data = null)
    {
        $this->properties = $data;
    }
    /**
     * __get 
     * 
	 * Obtiene la propiedad de un campo
	 * @param string $nombre Propiedad que se desea Buscar
     */
    public function __get(string $name)
    {
        return $this->getProperty($name);
    }
    /**
     * getProperty
     * 
     * Devuelve el valor de la propiedad especificada 
     * @param string $name 
     * @return object|null Regresa el valor de la propiedad Especificada,
     * en caso de no existir ni un método o propiedad con el nombre se regresa null
     */
    public function getProperty(string $name)
    {
        $dynamicMethod = 'get' . $this->studly($name); 
 
        if (method_exists($this, $dynamicMethod))            
            return $this->$dynamicMethod();

        if (isset ($this->properties[$name]))
            return $this->properties[$name];

        return null;
    }
    /**
     * __set
     * 
	 * Método Magico para Establecer o modificar el valor de una
     * propiedad del modelo.
     * @param string 	$name 	Nombre del argumento
     * @param string	$value 	Valor del argumento
     */
    function __set($name, $value)
    {
        $this->setProperty($name,$value);
    }

    public function setProperty($name, $valor)
    {
        $dynamicMethod = 'set' . $this->studly($name);
     
        if( ! method_exists($this, $dynamicMethod) )
            return $this->properties[$name] = $valor;

        $this->$dynamicMethod($name, $valor);
    }

    /**
     * OBTIENE LA COLUMNAS DE LA TABLA 
     * @return type object Arreglo de objetos con las columnas especificadas
     */
    protected function getColumnas(){
        return $this->properties;
    }
}