<?php namespace core\ORM\Database\Exception;

use core\Exception\GenericException;

/**
* Conexion no establecida.
*
* Lanza una excepción si no se puede establecer conexion a la base de datos
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class MissingConnectionException extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'Conexión a la base de datos no pude establecerce: %s';
}

