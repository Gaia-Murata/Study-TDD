<?php

require_once 'money.php';

class money_Test extends PHPUnit_Framework_TestCase
{
    protected $obj;

    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function  testMultiplication()
    {
        $five = new Doller(5);
        $this->assertEquals(new Doller(10), $five->times(2));
        $this->assertEquals(new Doller(15), $five->times(3));
    }

    public function  testFrancMultiplication()
    {
        $five = new Doller(5);
        $this->assertEquals(new Doller(10), $five->times(2));
        $this->assertEquals(new Doller(15), $five->times(3));
    }

    public function testEquality()
    {
        $obj1 = new Doller(5);
        $obj2 = new Doller(5);
        $obj3 = new Doller(6);
        $this->assertTrue($obj1->equals($obj2));
        $this->assertFalse($obj1->equals($obj3));
    }

}