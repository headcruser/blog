<?php namespace System\ORM\Database;

/**
* Interface conection
*
* Methods on conection
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
interface IConnection
{
    /**
     * Obtiene el nombre de la conexion a base de datos.
     *
     * @return string
     */
    public function configName():string;
    /**
     * Obtiene los datos de configuracion utilizados para crear la conexión.
     *
     * @return array
     */
    public function config():array;
}
