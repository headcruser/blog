<?php namespace core\lib;
use Smarty;

/** @class: Vista (Construye las vistas)
  * @project: BlogProyect
  * @date: 12-09-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class Vista 
{
    /**
     * Crea las vistas del usuario
     * @param type $path Indica el nombre de la ruta del template
     * @param type|null $key Especifica un nombre para la variable
     * @param type|null $value Pasa un argumento como objeto
     * @return type
     */
    public static function crear($path,$key=null,$value=null)
    {
        //comprobamos si existe la variable path
        if($path == "")
            die("Escribe una ruta");

        // convertimos la ruta en un array
        $paths = explode(".",$path); 
        
        //Construye la ruta
        $ruta = self::buildPath($paths);
            
        // comprobar si ese archivo existe
        if(!file_exists(PATH_VIEW.$ruta))
            die('La vista no existe ');

        //Ejecutamos el motor de plantillas
        $template=new Smarty();
       

        //comprobar si existe $key (Variable)
        if(!is_null($key))
        {
            if(is_array($key))
            {
                // extrae los keys y los convierte a variables
                extract($key,EXTR_PREFIX_SAME,"");
                die('Trabajando en el metodo');
            }
            else
            {
                //("index","usus",$usuarios)
                //$usus = $usuarios;
                ${$key} = $value;
                $template->assign("$key",${$key});
            }
        }
        $template->display(PATH_VIEW.$ruta);
    }

    /**
     * Construye una ruta a partir de un array 
     * @param type $arrayRuta Array que contiene la ruta
     * @return type
     */
    private function buildPath($arrayRuta)
    {
        $ruta = ""; // inicializamos

        for($i =0;$i < count($arrayRuta);$i++)
        { //recorrer el $arrayRuta
            if($i == count($arrayRuta)-1) // comprobamos si es el ultimo
                $ruta .= $arrayRuta[$i].".tpl"; // le ponemos .php
            else
                $ruta .= $arrayRuta[$i]."/"; // le concatenamos (/)
        }
        return $ruta;
    }
}