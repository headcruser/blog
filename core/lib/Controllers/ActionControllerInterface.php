<?php namespace core\lib\Controllers;
/** 
  * Controller
  * 
  * Define el comportamiento de los controladores del sistema
  * 
  * @project: BlogProyect
  * @date: 13-10-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
interface ActionControllerInterface
{
    /**
     * index
     * 
     * Metodo principal de ejecucion de un controlador.
     * @return mixed 
     */
    function index();
}
