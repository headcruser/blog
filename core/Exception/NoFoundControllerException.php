<?php namespace core\Exception;

use core\Exception\GenericException;
/**
* Controlador no encontrado.
*
* Lanza una excepción si no se encuentra el controlador
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class NoFoundControllerExeption extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'El controlador no existe: %s';
}