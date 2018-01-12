<?php
namespace test;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\ServerRequest;
use core\lib\Route\Router;

class RouterTest extends TestCase
{

    public function testCreateURL()
    {
        $router=new Router('/blog');

        $router->get('/blog', function () {
            echo 'index home';
        }, 'blog.index');

        $this->assertEquals('blog', $router->url('blog.index'));
    }

    public function testExecuteViewController(){

        $router=new Router(isset($_GET["uri"])?$_GET["uri"]:"/");
        $router->get('/', 'index#index', 'blog.index');
        $router->run();
    }

    public function testGenerateUri()
    {
        $router=new Router();
        $router->get('/', 'index#index', 'blog.index');
        $router->get('/entradas', 'index#entradas', 'blog.entradas');
        $router->get('/entradas/autores', 'index#entradas', 'blog.enAi');

        echo $router->generateUri('blog.entradas');
    }
}
