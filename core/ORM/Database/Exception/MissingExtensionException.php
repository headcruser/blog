<?php namespace core\ORM\Database\Exception;

use core\Exception\GenericException;

/**
* MissingExtensionException
*
* Lanza una excepción si no se ha utilizado el driver
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingExtensionException extends GenericException
{
    protected $_messageTemplate = 'El driver de la base de datos %s No ha sido utilizado';
}
