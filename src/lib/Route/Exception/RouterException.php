<?php namespace System\Route\Exception;

use System\Exception;

/**
* RouterExeption
*
* throw Exception router
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
final class RouterException extends Exception
{
    protected $messageTemplate = 'Router Exception: %s';
}
