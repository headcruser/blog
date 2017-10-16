<?php namespace core\lib\View;

use core\lib\View\RenderException\ViewPathException;
use core\lib\View\RenderException\ViewNoFoundException;
use Smarty;
/** 
  * RenderView 
  * 
  * Rendereriza el modelo Vista del usuario utilizando smarty
  * Como gestor de plantillas.
  * 
  * @project: BlogProyect
  * @date: 13-10-2017
  * @version: php7
  * @author: Daniel Martinez 
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class RenderView 
{
    private $template;
    const EXTENSION_FILE='.tpl';
    const DELIMITER = '.';

    public function __construct()
    {
        $this->template=new Smarty();
        $this->template->setTemplateDir(PATH_VIEW);
        $this->template->setCompileDir(RUTA_BASE."compiler");
        $this->template->setCacheDir(RUTA_BASE."compiler/cache");
    }
     /**
     * Render 
     * 
     * Renderiza las vistas del usuario, especificando la
     * ruta en donde se encuentra la vista.
     * 
     * Para Pasar una variable al gestor de plantillas, se 
     * hace la siguiente sintaxis: 
     *
     * (<Nombre_Plantilla>,<Nombre_variable>,<valor_variable>)
     * ("index","usus",$usuarios)
     *  En 
     *  $usus = $usuarios;
     * 
     * En el caso de asignar un array, existe una limitación
     * extrae los keys y los convierte a variables.
     * extract($key,EXTR_PREFIX_SAME,"");
     * 
     * @param string $path Indica el nombre de la ruta del template
     * @param array|null $key Especifica un nombre para la variable
     * @param array|null $value Pasa un argumento como objeto
     * @return RenderView
     */
    public function render(string $path,$key=null,$value=null)
    {
        if( $this->isEmptyPath( $path ) )
            throw new ViewPathException(
                ['reason' =>'Escribe una ruta']);

        $ruta = $this->buildPath( $path );

        if(!file_exists($ruta))
            throw new ViewNoFoundException(
                ['reason' => 'Revisa '.$ruta]);

        if(!is_null($key))
        {
            ${$key} = $value;
            $this->template->assign("$key",${$key});        
        }

        return $this->template->display($ruta);
    }

    public function isEmptyPath($pathUser)
    {
        return is_null($pathUser) || empty($pathUser);
    }
    /**
     * BuildPath
     * 
     * Construye una ruta a partir de un array 
     * @param array $arrayRuta Array que contiene la ruta
     * @return string Regresa una cadena con la ruta construida
    */
    private function buildPath( string $pathTemplate ):string
    {
        $arrayPath=$this->pathConverToArray( $pathTemplate );
        $sizeArray=count( $arrayPath );
        $path = '';

        for($i =0;$i < $sizeArray; $i++)
        { 
            if ( $i == ($sizeArray-1) )
                $path .= $arrayPath[$i].self::EXTENSION_FILE;
            else
                $path .= $arrayPath[$i].'/';
        }
        return PATH_VIEW.$path;
    }
    /**
     * pathConverToArray
     * 
     * Convierte la ruta a un arreglo, utilizando el delimitador '.'
     * Por ejemplo
     * (home.controller)
     * 
     * Resultado
     * array(home,controller)
     * 
     * @param string $path Ruta que se desea converir. 
     * @return array Regresa la ruta contenida en un array
     */
    private function pathConverToArray( string $path ):array
    {
        return explode( self::DELIMITER,$path );
    }
}