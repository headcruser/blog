<?php namespace core\lib;

/** Clase JsonFormat
  *
  * Esta Clase conteiene los metodos para formatear 
  * Arreglos a formato JSON
  *
  * @project: BlogProyect
  * @date: 05-10-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
final class JsonFormat
{
    /**
     * json_response
     * 
     * Formatea un arreglo a formato JSON
     * @param array|string $data 
     * @return JSON
     */
    function json_response($data)
    {
        header('Content-type: application/json');
		header("Cache-Control: no-cache");
        header("Pragma: no-cache");
        
        return json_encode($data);
    }
}