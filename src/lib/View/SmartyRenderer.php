<?php namespace System\View;

use Smarty;
use System\View\RendererInterface;
use System\View\RenderException\RendererException;

/**
 * RenderView
 *
 * Rendereriza el modelo Vista del usuario utilizando smarty
 * Como gestor de plantillas.
 *
 * @version:   1.2
 * @author:    Daniel Martinez
 * @copyright: Daniel Martinez
 * @email:     headcruser@gmail.com
 * @license:   GNU General Public License (GPL)
 */
class SmartyRenderer implements RendererInterface
{
    /**
     * Const Folder Smarty Namespace
     *
     * @var string
     */
    const DEFAULT_NAMESPACE= '__SMARTY';
    /**
     * Extension for Smarty
     *
     * @var string
     */
    const EXT='.tpl';
    /**
     * Smarty Reference
     *
     * @var Smarty
     */
    private $template;
    /**
     * $paths Paths view folder Smarty
     *
     * @var array
     */
    private $paths = [];
    /**
     * __construct
     *
     * @param Smarty $smarty
     */
    public function __construct(Smarty $smarty)
    {
        $this->template = $smarty;
        $this->addPath($this->template->getTemplateDir(0));
    }
    /**
     * addpath
     *
     * Add a route to load the views
     *
     * @param  string      $namespace workespace view
     * @param  null|string $path      Path Directory
     * @return void
     */
    public function addpath(string $namespace, ?string $path = null):void
    {
        if (is_null($path)) {
            $this->paths[self::DEFAULT_NAMESPACE]=$namespace;
        } else {
            $this->paths[$namespace]=$path;
        }
    }
    /**
     * render
     *
     * Permit Render a View.
     * '@' indicate Namespace of view for Module View Folder
     *      $this->render('@blog\view') | CPWEB/views
     * load view normality from template Smarty
     *      $this->render('view')
     * if exist in other folder inside template smarty
     *      $this->render('layout.footer')
     *
     * @param  string $view
     * @param  array  $params
     * @return string
     */
    public function render(string $view, array $params = []):string
    {
        $path=($this->hasNamespace($view))? $this->remplaceNamespace($view).self::EXT:
                                            $this->buildPath($view);

        if (! file_exists($path)) {
            throw new RendererException('The route of the view does not exist: '.$path);
        }
        return $this->template->fetch('file:'.$path);
    }
    /**
     * addGlobal
     * Adding local Variables to view using
     *
     * @param  string $key   name for reference
     * @param  object $value element adding
     * @return void
     */
    public function addGlobal(string $key, $value):void
    {
        $this->assign($key, $value);
    }
    /**
     * assign
     *
     * Assing a Variable to Smarty template
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function assign($key = null, $value = null):void
    {
        if (!is_null($key)) {
            ${$key} = $value;
            $this->template->assign("$key", ${$key});
        }
    }
    /**
     * hasNamespace
     *
     * Search delimiter '@' for indicate namespace
     *
     * @param  string $view
     * @return bool true exist | false not exist
     */
    private function hasNamespace(string $view):bool
    {
        return $view[0]==='@';
    }
    /**
     * remplaceNamespace
     *
     * Remove delimiter '@' from the path for the view
     *
     * @param  string $view path for Namespace
     * @return string Return a string without '@'
     */
    private function remplaceNamespace(string $view):string
    {
        $namespace =$this->getNamespace($view);
        return str_replace('@'.$namespace, $this->paths[$namespace], $view);
    }
    /**
     * getNamespace
     *
     * get Name for Namespace
     *
     * @param  string $view Namespace for view
     * @return string Clear Namespace
     */
    private function getNamespace(string $view):string
    {
        return substr($view, 1, strpos($view, '/')-1);
    }
    /**
     * BuildPath
     *
     * Construye una ruta a partir de un array
     *
     * @param  array $arrayRuta Array que contiene la ruta
     * @return string Regresa una cadena con la ruta construida
     */
    private function buildPath(string $pathTemplate):string
    {
        $arrayPath=$this->pathConverToArray($pathTemplate);
        $sizeArray=count($arrayPath);
        $path='';
        for ($i =0; $i < $sizeArray; $i++) {
            $path .=($i ==($sizeArray-1))?
                $arrayPath[$i].self::EXT:
                    $arrayPath[$i].DIRECTORY_SEPARATOR;
        }
        return $this->paths[self::DEFAULT_NAMESPACE].$path;
    }
    /**
     * pathConverToArray
     *
     * Split the path using the delimiter'.'.
     *
     * @param  string $path Route Path
     * @return array Return Array path
     */
    private function pathConverToArray(string $path):array
    {
        return explode('.', $path);
    }
}
