<?php
namespace test;

use core\lib\View\RenderView;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\ServerRequest;

class AppTest extends TestCase
{
    public function testRenderErrorTemplate()
    {
        $smarty =  new RenderView();
        try {
            echo $smarty->render('sdsd');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
