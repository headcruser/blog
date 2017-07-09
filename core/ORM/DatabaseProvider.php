<?php namespace core\ORM;

/*Clase abstracta que modela el comportamiento del manejador de base de datos**/
abstract class DatabaseProvider
{
    protected $resource;
    public abstract function connect($host,$user,$pass,$dbname);
    public abstract function disconnect();
    public abstract function getNoError();
    public abstract function isConnected();
}