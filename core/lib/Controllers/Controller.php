<?php namespace core\lib\Controllers;
use core\lib\View\RenderView;
use core\lib\Controllers\ActionControllerInterface;
use core\lib\JsonFormat;
use core\Exception\GenericException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Mannion007\RepositoryPattern\Repository\GameRepository;
                         
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
    private $_view;
    private $_jsonArray;
    protected $container;
    /**
     * __construct
     * 
     * Constructor a implementar por las clases Hijas
     * @return mixed 
     */
    public function __construct()
    {
        $this->_view=new RenderView();
        $this->_jsonArray=new JsonFormat();

        $this->container = new ContainerBuilder();

        $loader = new YamlFileLoader(
            $this->container,
            new FileLocator( RUTA_BASE . 'config' )
        );
        $loader->load('services.yml');        
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
        try 
        {
            $this->_view->render( $path, $key ,$value );   
        } catch (\Exception $e) {
            $this->_view->render( 'error.exception', "message" ,$e->getMessage() ); 
        }
    }

    protected function assign($key=null,$value=null)
    {
        $this->_view->assign($key,$value);
    }
    /**
     * json_response
     * 
     * Formatea un arreglo a formato JSON
     * @param array|string $data 
     * @return JSON
     */
    protected function formatterToJson($data)
    {
        return $this->_jsonArray->json_response($data);
    }
}