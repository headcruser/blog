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
     * get the configuration of name a database conection
     *
     * @return string
     */
    public function configName();
    /**
     * Get the configuration data used to create the connection.
     *
     * @return array
     */
    public function config();
}