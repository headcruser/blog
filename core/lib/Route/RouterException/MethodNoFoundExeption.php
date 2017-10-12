<?php namespace core\lib\Route\RouteException;

use core\Exception\GenericException;
/**
* Método No Econtrada.
*
* Lanza una excepción si no se encuentra el metodo especificado
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MethodNoFounException extends GenericException
{
    protected $_messageTemplate = 'El método no existe: %s';
}