<?php namespace core\ORM\Database\Exception;

use core\Exception\GenericException;
/**
* Vista no encontrada.
*
* Lanza una excepción si no se encuentra la vista
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class ViewException extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'La vista No existe: %s';
}