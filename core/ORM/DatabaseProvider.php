<?php namespace core\ORM;

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
    protected $resource;
    public abstract function connect($host,$user,$pass,$dbname);
    public abstract function disconnect();
    public abstract function getNoError();
    public abstract function isConnected();
}