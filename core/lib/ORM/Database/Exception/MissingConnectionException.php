<?php namespace System\ORM\Database\Exception;

use System\Exception;

/**
* Conexion no establecida.
*
* Lanza una excepción si no se puede establecer conexion a la base de datos
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingConnectionException extends Exception
{
    protected $messageTemplate = 'Conexión a la base de datos no pude establecerce: %s';
}
