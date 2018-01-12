<?php namespace System\Route;

 use System\View\RenderView;
 use System\Route\HelpContoller;

class Router
{
    /**
     * $url page
     * @var string
     */
    private $url;
    /**
     * routes
     * @var array
     */
    private $routers=[];
    /**
     * Named Routes
     * @var array
     */
    private $namedRoutes=[];
  /**
   * __construct
   */
    public function __construct($url)
    {
        $this->url=$url;
    }
    /**
     * get
     *
     * Assing url mediatiing post
     *
     * @param mixed $path
     * @param mixed $calleable
     * @param mixed $name
     * @return mixed
     */
    public function get($path, $calleable, $name = null):Route
    {
        return $this->add($path, $calleable, $name, 'GET');
    }
    /**
     * post
     *
     * Assing url mediatiing post
     * @param mixed $path
     * @param mixed $calleable
     * @param mixed $name
     * @return mixed
     */
    public function post($path, $calleable, $name = null):Route
    {
        return $this->add($path, $calleable, $name, 'POST');
    }
    /**
     * add
     *
     * Ading route path for router
     * @param string $path
     * @param string $calleable
     * @param string $name
     * @param string $method
     * @return route
     */
    private function add($path, $calleable, $name, $method)
    {
        $route=new Route($path, $calleable);
        $this->routes[$method][]=$route;

        if (is_string($calleable)&& $name===null) {
            $name=$calleable;
        }
        if ($name) {
            $this->namedRoutes[$name]=$route;
        }
        return $route;
    }
    /**
     * run
     *
     * Execute function controller
     * thow exception if no matching routes
     * @return callable
     */
    public function run()
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            throw new Exception("Error Processing Request", 1);
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }
         throw new \Exception('No maching routes', 1);
    }
    /**
     * url
     * get url mediating your name
     * @param string $name
     * @param array $params
     * @return string url associated
     */
    public function url($name, $params = [])
    {
        if (!isset($this->namedRoutes[$name])) {
            throw new Exception("No route matches this name");
        }
        return $this->namedRoutes[$name]->getURL($params);
    }
}
