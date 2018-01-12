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
}
