<?php
/**
 * Created by PhpStorm.
 * User: haxormamad
 * Date: 20/02/14
 * Time: 21:58
 */

namespace Ens\JoobetBundle\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase{

    public function testShow()
    {
        $client=static::createClient();
        $crawler=$client->request('GET','category/index');
        $this->assertEquals('Ens\JoobetBundle\Controller\CategoryController::showAction',$client->getRequest()
        ->attributes->get('_controller'));
        $this->assertTrue(200==$client->getResponse()->getStatusCode());
    }
} 