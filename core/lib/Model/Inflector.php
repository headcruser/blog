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
}