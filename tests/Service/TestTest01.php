<?php

namespace Nmoller\Tests\Service;

use Nmoller\Service\Test01;
use PHPUnit\Framework\TestCase;

class TestTest01 extends TestCase {

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->container = include __DIR__.'/../app.php';
    }

    public function testGetEcho()
    {

        $cont = $this->container;
        $test01 = $cont->get('test01');
        $this->assertEquals('Hello world', $test01->getValFromT2());
    }
}