<?php namespace core\lib\Route\RouteException;

use core\Exception\GenericException;
/**
* Clase No Econtrada.
*
* Lanza una excepción si no se encuentra una clase
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class ClassNoFoundExeption extends GenericException
{
    protected $_messageTemplate = 'La Clase no existe: %s';
}