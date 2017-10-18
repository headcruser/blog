<?php namespace core\ORM\Database;
/**
* Interface conection
*
* Methods on conection
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
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