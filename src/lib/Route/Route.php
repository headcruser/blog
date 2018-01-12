<?php
namespace System\Route;

/**
 * Class Router
 *
 * Represent a matched route
 * @package Framework\Router
 */
class Route
{
    /**
     * Path Url
     * @var string
     */
    private $path;
    /**
     * Call to funtion associated
     * @var callable
     */
    private $callback;
    /**
     * Regex Expresion
     * @var string
     */
    private $matches;
    /**
     * Params for the route
     * @var array
     */
    private $params=[];
    /**
     * __construct
     * @param string $path
     * @param callable $callback
     */
    public function __construct(string $path, $callback)
    {
        $this->path=trim($path, '/');
        $this->callback=$callback;
    }
    /**
     * Assign a Regex Expresion for the url Define
     * @param string $param
     * @param string $regex
     * @return Route Return reference this class
     */
    public function with($param, $regex):self
    {
        $this->params[$param]=str_replace('(', '(?:', $regex);
        return $this;
    }
    /**
     * match url
     * @param string $url
     * @return bool returns true if it finds a match
     */
    public function match($url)
    {
        $url=trim($url, '/');
        $path=preg_replace_callback('#:([\w]+)#', [$this,'paramMatch'], $this->path);
        $regex="#^$path$#i";

        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        array_shift($matches);
        $this->matches=$matches;
        return true;
    }
    /**
     * paramMatch
     *
     * Search Regex for the url
     *
     * @return callable Return funtion calleble method
     */
    private function paramMatch($match)
    {
        if (isset($this->params[$match[1]])) {
            return '('.$this->params[$match[1]].')';
        }
        return '([^/]+)';
    }
    /**
     * getURL
     *
     * Get url for Route Specific
     *
     * @param string|array $param
     * @return string
     */
    public function getURL($param)
    {
        $path=$this->path;
        if (count($param)===0) {
            return str_replace(":id", "", $path);
        }
        foreach ($param as $k => $v) {
            $path=str_replace(":$k", $v, $path);
        }
        return $path;
    }

    /**
     * Get call to funtion associated
     *
     * @return  callable
     */
    public function getCallback()
    {
        return $this->callback;
    }
    /**
     * Get regex Expresion
     *
     * @return  string
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * Get path Url
     *
     * @return  string
     */
    public function getPath()
    {
        return $this->path;
    }
}