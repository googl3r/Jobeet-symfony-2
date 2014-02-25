<?php
/**
 * Created by PhpStorm.
 * User: haxormamad
 * Date: 20/02/14
 * Time: 20:01
 */

namespace Ens\JoobetBundle\Tests\Utils;


use Ens\JoobetBundle\Utils\Joobet;

class TestJoobet extends \PHPUnit_Framework_TestCase
{
    public function testSlugify()
    {
        $this->assertEquals('sensio', Joobet::slugify('Sensio'));
        $this->assertEquals('sensio-labs', Joobet::slugify('sensio labs'));
        $this->assertEquals('sensio-labs', Joobet::slugify('sensio labs'));
        $this->assertEquals('paris-france', Joobet::slugify('paris,france'));
        $this->assertEquals('sensio', Joobet::slugify(' sensio'));
        $this->assertEquals('sensio', Joobet::slugify('sensio '));
    }

} 