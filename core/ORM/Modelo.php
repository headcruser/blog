<?php namespace core\ORM;

use core\ORM\EtORM;
/**
* CONTIENE A LAS PROPIEDADES DE UNA TABLA DIMAICAMENTE.
* @author Headcruser
* @version 2017_v1
*/
class Modelo extends EtORM
{
   //propiedad  que va a contener a todas las propiedades dinamicamente
    private $data = array();
    protected static $table;

    function __construct($data = null)
    {
        $this->data = $data;
    }

    //GETTERS Y SETTERS MÁGICOS
    function __get($name)
    {
        if (array_key_exists($name, $this->data)) 
        {
            return $this->data[$name];
        }
    }

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