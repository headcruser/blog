<?php namespace core\ORM\Database\Exception;
use core\Exception\GenericException;
/**
* Driver no utilizado.
*
* Lanza una excepción si no se ha utilizado el driver
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingExtensionException extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'El driver de la base de datos %s No ha sido utilizado';
}