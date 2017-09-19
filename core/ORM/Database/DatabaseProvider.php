<?php namespace core\ORM\Database;
//Obsoleto
abstract class DatabaseProvider
{
    /**
     * @var DatabaseProvider
     */
    protected $resource;

    /**
     * @var DabaseConfiguration
     */
    protected $configuration;

    public abstract function disconnect();
    public abstract function getNoError();
    public abstract function isConnected():bool;
}