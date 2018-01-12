<?php
namespace System\View;

interface RendererInterface
{
    /**
     * addpath
     *
     * Add a route to load the views
     * @param string $namespace workespace view
     * @param null|string $path Path Directory
     * @return void
     */
    public function addpath(string $namespace, ?string $path = null):void;

    /**
     * render
     *
     * Permit Render a View
     * @ indicate Namespace of view
     *      $this->render('@blog\view')
     * load view normality
     *      $this->render('view')
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render(string $path, $key = null, $value = null):string;
    /**
     * addGlobal
     *
     * Adding local Variables to view
     * @param mixed $key
     * @param mixed $value
     * @return mixed
     */
    public function addGlobal(string $key, $value):void;
}
