<?php namespace core\lib\View\RenderException;

use core\Exception\GenericException;
/**
* ViewNoFoundException
*
* Lanza una excepción si no encuentra el archivo Template 
*
* @project: BlogProyect
* @date: 13-10-2017
* @version: php7
* @author: Daniel Martinez 
* @copyright: Daniel Martinez
* @email: headcruser@gmail.com
* @license: GNU General Public License (GPL)
*/
final class ViewNoFoundException extends GenericException
{
    protected $_messageTemplate = 
        'La Plantilla Que intentas Ejecutar, No se encuentra 
        dentro del directorio de plantillas : %s';
}