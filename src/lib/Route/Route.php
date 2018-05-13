<?php
namespace System\Route;

/**
 * Class Router
 *
 * Represent a matched route
 *
 * @package Framework\Router
 */
class Route
{
    /**
     * Path Url
     *
     * @var string
     */
    private $path;
    /**
     * Call to funtion associated
     *
     * @var callable
     */
    private $callback;
    /**
     * Regex Expresion
     *
     * @var string
     */
    private $matches = [];
    /**
     * Params for the route
     *
     * @var array
     */
    private $params=[];

    /**
     * $class
     *
     * @var string
     */
    private $class;

    /**
     * $method
     *
     * @var string
     */
    private $method;
    /**
     * __construct
     *
     * @param string   $path
     * @param callable $callback
     */
    public function __construct(string $path, $callback)
    {
        $this->path = $path;
        $this->callback = $callback;
        $params = explode('#', $this->callback);
        $this->class = ucwords($params[0]);
        $this->method = $params[1];
    }
    /**
     * Assign a Regex Expresion for the url Define
     *
     * @param  string $param
     * @param  string $regex
     * @return Route Return reference this class
     */
    public function with($param, $regex):self
    {
        $this->params[$param]=str_replace('(', '(?:', $regex);
        return $this;
    }
    /**
     * match url
     *
     * @param  string $url
     * @return bool returns true if it finds a match
     */
    public function match($url)
    {
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', trim($this->path, '/'));
        $regex = "#^$path$#i";

        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        array_shift($matches);
        $this->matches = $matches;

        return true;
    }

    /**
     * getURL
     *
     * Get url for Route Specific
     *
     * @param  string|array $param
     * @return string
     */
    public function getURL($param)
    {
        $path = $this->path;
        if (count($param) === 0) {
            return str_replace(":id", "", $path);
        }
        foreach ($param as $k => $v) {
            $path = str_replace(":$k", $v, $path);
        }
        return $path;
    }

    /**
     * buildNamespaceController
     *
     * @return string
     */
    public function buildNamespaceController():string
    {
        return "App\\controller\\".$this->class."Controller";
    }

    /**
     * getMethod
     *
     * @return void
     */
    public function getMethod():string
    {
        return $this->method;
    }

    /**
     * getClass
     *
     * @return void
     */
    public function getClass():string
    {
        return $this->class;
    }

    /**
     * getMatches
     *
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }
}
