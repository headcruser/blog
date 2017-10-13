<?php namespace core\lib\View\RenderException;

use core\Exception\GenericException;
/**
* ViewException
*
* Lanza una excepción si no se encuentra la vista
*
* @project: BlogProyect
* @date: 13-10-2017
* @version: php7
* @author: Daniel Martinez 
* @copyright: Daniel Martinez
* @email: headcruser@gmail.com
* @license: GNU General Public License (GPL)
*/
final class ViewPathException extends GenericException
{
    protected $_messageTemplate = 'La ruta de la vista Esta Vacia: %s';
}