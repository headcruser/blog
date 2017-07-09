<?php namespace core\ORM;

use core\ORM\MySqlProvider;

class DataBase
{
    private $provider;
    private $params;
    private static $_con;

    public function __construct($provider,$host,$user,$pass,$db)
    {
        if(!class_exists($provider))
            throw new Exception( "El provedor no esta definido" );

        $this->provider = new $provider();
        $this->connect($host,$user,$pass,$db);

        if(!$this->provider->isConnected())
            throw new Exception( "La conexion no se establecio u_u" );
    }

    public static function getConnection()
    {
        
    }
    
}