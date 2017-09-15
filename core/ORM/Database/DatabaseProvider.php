<?php namespace core\ORM\Database;

/** @class: DatabaseProvider
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
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