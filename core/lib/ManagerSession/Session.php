<?php namespace core\lib\ManagerSession;

/*
* Gestiona las sessiones de los usuarios
**/
class Session
{
    public function __construct(){
        session_start();
    }

    public function addValue(string $key ,$value){
        $_SESSION[$key] = $value;
    }

    /**
    * Obtiene un arrreglo de la superGlobal Session
    */
    public function getValue($key)
    {
        if($this->issetValue($key))
           return $_SESSION[$key];           
        return false;
    }

    public function removeValue(string $key)
    {
        if($this->issetValue($key))
            unset($_SESSION[$key]);
    }

    public function issetValue($value):bool
    {
        return isset($_SESSION[$value])?true:false;
    }

    public function destroySession(){
        session_unset();
        session_destroy();
    }
}
