<?php namespace core\ORM\Database;


interface IConnection
{
    /**
     * Obtiene la configuración de la conexión
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