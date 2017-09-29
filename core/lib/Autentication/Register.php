<?php namespace core\lib\Autentication; 
/** Register
  * 
  * Registro de usuarios del sistema
  *
  * @project: BlogProyect
  * @date: 29-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
interface Register 
{
    function login(string $email,string $pass ):bool;
    function logout();
}