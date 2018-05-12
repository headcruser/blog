<?php namespace System\View;

use Smarty;
use System\View\RendererInterface;
use System\View\RenderException\ViewPathException;
use System\View\RenderException\ViewNoFoundException;

/**
  * RenderView
  *
  * Rendereriza el modelo Vista del usuario utilizando smarty
  * Como gestor de plantillas.
  *
  * @version: 1.2
  * @author: Daniel Martinez
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class RenderView implements RendererInterface
{
    /**
     * Extension Smarty
     * @var string
     */
    const EXTENSION_FILE='.tpl';
    /**
     * Delimiter for Path
     * @var string
     */
    const DELIMITER = '.';
    /**
     * Const Folder Smarty
     * @var string
     */
    const DEFAULT_NAMESPACE= '__SMARTY';
    /**
     * Reference Smarty Template
     * @var Smarty
     */
    private $template;
    public function __construct(
        string $templateDir = '.\blog\templates',
        string $compileDir = '.\blog\compiler',
        string $cache = '.\blog\compiler\cache'
    ) {
        $this->template=new Smarty();
        $this->template->setTemplateDir(
            array(self::DEFAULT_NAMESPACE=>$templateDir)
        );

        $this->template->setCompileDir($compileDir);
        $this->template->setCacheDir($cache);
    }
     /**
     * Render
     * Permit Render a View.
     *  load view normality from template Smarty
     *      $this->render('view')
     * if exist in other folder inside template smarty
     *      $this->render('layout.footer')
     *
     * @param string $path Indica el nombre de la ruta del template
     * @param array|null $key Especifica un nombre para la variable
     * @param array|null $value Pasa un argumento como objeto
     * @return void
     */
    public function render(string $path, $key = null, $value = null)
    {

        if ($this->isEmptyPath($path)) {
            throw new ViewPathException(
                ['reason' =>'Escribe una ruta']
            );
				}
        $ruta = $this->buildPath($path);

        if (!file_exists($ruta)) {
					print_r(['La ruta no existe' => 'Revisa '.$ruta]);
            throw new ViewNoFoundException(
                ['reason' => 'Revisa '.$ruta]
						);
        }

        if (!is_null($key)) {
            ${$key} = $value;
            $this->template->assign("$key", ${$key});
        }
        return $this->template->display($ruta);
    }
     /**
     * assign
     *
     * Assing a Variable to Smarty template
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function assign($key = null, $value = null)
    {
        if (!is_null($key)) {
            ${$key} = $value;
            $this->template->assign("$key", ${$key});
        }
    }
    /**
     * isEmptyPath
     *
     * Check Path is Empty
     * @param string $pathUser
     * @return bool
     */
    public function isEmptyPath(string $pathUser):bool
    {
        return is_null($pathUser) || empty($pathUser);
    }
     /**
     * addpath
     *
     * Add a route to load the views
     * @param string $namespace workespace view
     * @param null|string $path Path Directory
     * @return void
     */
    public function addpath(string $namespace, ?string $path = null):void
    {
        $this->template->addTemplateDir($path, $namespace);
    }
     /**
     * addGlobal
     * Adding local Variables to view using
     * @param string $key name for reference
     * @param object $value element adding
     * @return void
     */
    public function addGlobal(string $key, $value):void
    {
        $this->assign($key, $value);
    }
    /**
     * BuildPath
     *
     * Construye una ruta a partir de un array
     * @param array $arrayRuta Array que contiene la ruta
     * @return string Regresa una cadena con la ruta construida
    */
    private function buildPath(string $pathTemplate):string
    {
        $arrayPath=$this->pathConverToArray($pathTemplate);
        $sizeArray=count($arrayPath);
        $path = '';

        for ($i =0; $i < $sizeArray; $i++) {
            if ($i == ($sizeArray-1)) {
                $path .= $arrayPath[$i].self::EXTENSION_FILE;
            } else {
                $path .= $arrayPath[$i].DIRECTORY_SEPARATOR;
            }
        }

        return $this->template->getTemplateDir(self::DEFAULT_NAMESPACE).$path;
    }
    /**
     * pathConverToArray
     *
     * Split the path using the delimiter'.'.
     * Result:
     * array(home,controller)
     *
     * @param string $path Ruta que se desea converir.
     * @return array return Array path
     */
    private function pathConverToArray(string $path):array
    {
        return explode(self::DELIMITER, $path);
    }
}
