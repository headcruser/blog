<?php namespace core\lib\Model;
/** Inflector 
  * 
  * Helps to Models
  * 
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
trait Inflector 
{
    /** 
    * Studly
    *
    * Convierte en una cadena en formato camelCase
    * 
    * @var string snakedString Cadena que sera convertida
    * @return string regresará la misma cadena pero en formato CamelCase
    */
    public function studly(string $snakedString ):string
    {
        $array = explode('_', $snakedString);
        $array = array_map('ucfirst', $array);
        return implode('', $array);
    }
    /**
    * clearInput
    * 
    * Limpia una cadena de caracteres de html, espacios
    * en blanco y de otros caracteres.
    * 
    * @return type String Regresa el campo limpio
    */
    public static function clearInput(string $campo)
    {
        $campo = trim($campo);
        $campo = stripcslashes($campo);
        $campo = htmlspecialchars($campo);    
        return $campo;
    }
}