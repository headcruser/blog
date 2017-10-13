<?php namespace core\lib\Controllers;
use core\lib\View\RenderView;
use core\lib\Controllers\ActionControllerInterface;
                         
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
abstract class Controller implements ActionControllerInterface
{
    protected $_view;
    /**
     * __construct
     * 
     * Constructor a implementar por las clases Hijas
     * @return mixed 
     */
    public function __construct()
    {
        $this->_view=new RenderView();
    }

     /**
     * renderView
     * 
     * Construye una Vista para ponerla a disposicion de un 
     * controlador.
     * 
     * @param string $path Indica el nombre de la ruta del template
     * @param array|string|null $key Especifica un nombre para la variable
     * @param array|string|null $value Pasa un argumento como objeto
     */
    protected function renderView(string $path,$key=null,$value=null)
    {
        $this->_view->render( $path, $key ,$value );
    }
}