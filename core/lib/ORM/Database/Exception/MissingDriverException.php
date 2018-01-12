<?php namespace System\ORM\Database\Exception;

use System\Exception;

/**
* MissingDriverException
*
* Lanza una excepción si no se encuentra el driver Correspondiente
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingDriverException extends Exception
{
    protected $messageTemplate = 'El dirver no pudo ser encontrado: %s';
}
