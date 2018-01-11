<?php namespace core\lib\Route;

 use core\lib\View\RenderView;
 use core\lib\Route\HelpContoller;

/**
  * Router Class
  *
  * Gestiona el enrutamiento del sistema.
  *
  * @project: BlogProyect
  * @date: 12-10-2017
  * @version: php7
  * @author: Daniel Martinez
  * @copyright: Daniel Martinez
  * @email: headcruser@gmail.com
  * @license: GNU General Public License (GPL)
  */
class Router
{
    private $uri;
    private $_systemControllers;
    const SLASH ='/';
    use HelpController;

  /**
   * __construct
   *
   * Construye el objeto enrutador
   */
    public function __construct()
    {
        $this->_controllers=array( "/"=>"indexController",
                              "/home"=>"indexController",
                              "/auth"=>"AuthController",
                              "/registro"=>"registroController",
                              "/admin" =>"adminController",
                              "/usuario" =>"usuarioController",
                              "/entrada" =>"EntradaController"
                            );
        $this->setUri();
    }
  /**
   * setUri
   *
   * Asigna la ruta del navegador web,
   * mediante la superglobal Get.
   *
   * @return void
   */
    private function setUri()
    {
        $this->uri=isset($_GET["uri"])?$_GET["uri"]:self::SLASH;
    }
  /**
   * Submit
   *
     * Enruta al usuario a la página correspondiente
   * dependendo la ruta del navegador.
   *
     * @return type void
     */
    public function submit()
    {
        if ($this->uri!=self::SLASH) {
            return $this->readerPath($this->uri);
        }
        
        if ($this->searchKeyInControllers(self::SLASH)) {
            foreach ($this->_controllers as $ruta => $controller) {
                if ($ruta == self::SLASH) {
                    $controlador=$controller;
                }
            }
      
            $this->getController('index', $controlador);
        }
    }
  /**
     * readerPath
     *
     * Lee la ruta especificada por el usuario
     * @param array $ruta Contiene la ruta del usuario
     * @return void No retorna ningun Valor
     */
    public function readerPath(string $uri)
    {
        $dividePaths=$this->partitionPath($uri);
        $estado=false;
        foreach ($this->_controllers as $ruta => $controller) {
            if ($this->clearCharacterSlash($ruta) !=="") {
                if ($this->searchFirstMatch($uri, $ruta)) {
                    $arrayParams  = array();
                    $estado       = true;
                    $controlador  = $controller;
                    $metodo       = "";
                    $cantidadRuta = $this->numRoutes($ruta);
                    $cantidad     = count($dividePaths);
                    if ($cantidad > $cantidadRuta) {
                        $metodo = $dividePaths[$cantidadRuta];
                        for ($i = 0; $i < $cantidad; $i++) {
                            if ($i > $cantidadRuta) {
                                $arrayParams[] = $dividePaths[$i];
                            }
                        }
                    }
                    $this->getController($metodo, $controlador, $arrayParams);
                }
            }
        }
        if ($estado == false) {
            $_view=new RenderView();
            return $_view->render('error.404');
        }
    }
  /**
     * PartitionPath
     *
     * Divide una cadena a partir del delimitator '/'.
     * Por ejemplo: "/index/html"
     * array(index,html);
   * Utiliza la super Global server, para obtener la ruta
   * del navegador.
   *
     * @return array Regresa un arreglo con la cadena dividida
     */
    private function partitionPath(string $path): array
    {
        return explode(self::SLASH, $path);
    }
  /**
   * clearCharacterSlash
   *
   * Limpia la cadena, quitando los / econtrados
   * @param string $word Palabra que se debe limpiar
   * @return string Devuelve una cadena Libre de /
   */
    private function clearCharacterSlash($word):string
    {
        return trim($word, self::SLASH);
    }
  /**
     * NumRoutes
     *
     * Cuenta el numero de rutas encontradas en la cadena
     * Por ejemplo: "/index/login"
     * resultado=2 (index, login);
     * @param string Cadena que se va a dividir en un array de rutas
     * @return array Regresa un arreglo con la cadena dividida
     */
    public function numRoutes(string $path): int
    {
        return count(explode(self::SLASH, trim($path, self::SLASH)));
    }
  /**
   * searchFirstMatch
   *
   * Encuentra la primera ocurrencia de un substring en un string.
   *
   * @param string $haystack Lugar en dónde hay que buscar
   * @param string $needle Aguja que hay que buscar
   * @return bool
   * Devuelve True Si encontro alguna coincidencia
   * Devuelve False en caso de no encontrar coincidencias
   */
    private function searchFirstMatch(string $haystack, string $needle): bool
    {
        return strpos($haystack, $this->clearCharacterSlash($needle)) !==false;
    }
  /**
   * searchKeyInControllers
   *
   * Realiza Busqueda de una clave dentro de un arreglo asociativo
   *
   * @param string $key Valor a buscar en el arreglo de controladores
   * @return bool Devuelve True Si encontro alguna coincidencia,
   * en caso de no encontrar coincidencias, Devuelve False
   */
    private function searchKeyInControllers(string $key):bool
    {
        return array_key_exists($key, $this->_controllers);
    }
}
