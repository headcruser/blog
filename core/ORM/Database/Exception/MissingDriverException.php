<?php namespace core\ORM\Database\Exception;
use core\Exception\GenericException;
 /**
* Driver No encontrado.
*
* Lanza una excepción si no se encuentra el driver Correspondiente
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingDriverException extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'El dirver no pudo ser encontrado: %s';
}