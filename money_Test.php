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
        $money = new Money();
        $five = $money->doller(5);
        $this->assertEquals($money->doller(10), $five->times(2));
        $this->assertEquals($money->doller(15), $five->times(3));
    }

    public function  testFrancMultiplication()
    {
        $money = new Money();
        $five = $money->franc(5);
        $this->assertEquals($money->franc(10), $five->times(2));
        $this->assertEquals($money->franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $money = new Money();
        $obj1 = $money->doller(5);
        $obj2 = $money->doller(5);
        $obj3 = $money->doller(6);
        $this->assertTrue($obj1->equals($obj2));
        $this->assertFalse($obj1->equals($obj3));

        $obj1 = $money->franc(5);
        $obj2 = $money->franc(5);
        $obj3 = $money->franc(6);
        $this->assertTrue($obj1->equals($obj2));
        $this->assertFalse($obj1->equals($obj3));

        $obj1 = $money->franc(5);
        $obj2 = $money->doller(5);
        $this->assertFalse($obj1->equals($obj2));
    }

    public function testCurrency()
    {
        $money = new Money();
        $this->assertEquals("USD", $money->doller(1)->currency() );
        $this->assertEquals("CHF", $money->franc(1)->currency() );
    }

}