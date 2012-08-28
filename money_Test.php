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
        $five = Money::doller(5);
        $this->assertTrue( Money::doller(10)->equals($five->times(2)) );
        $this->assertTrue( Money::doller(15)->equals($five->times(3)) );
    }

    public function testEquality()
    {
        $obj1 = Money::doller(5);
        $obj2 = Money::doller(5);
        $obj3 = Money::doller(6);
        $this->assertTrue($obj1->equals($obj2));
        $this->assertFalse($obj1->equals($obj3));

        $obj1 = Money::franc(5);
        $obj2 = Money::doller(5);
        $this->assertFalse($obj1->equals($obj2));
    }

    public function testCurrency()
    {
        $this->assertEquals("USD", Money::doller(1)->currency() );
        $this->assertEquals("CHF", Money::franc(1)->currency() );
    }

    public function testSimpleAddition()
    {
        $five = Money::doller(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        $this->assertEquals(Money::doller(10),$reduced);
    }

    public function testPlusReturnsSum()
    {
        $five = Money::doller(5);
        $result = $five->plus($five);
        $sum = $result;
        $this->assertEquals($five, $sum->augend);
        $this->assertEquals($five, $sum->addend);
    }

    public function testReduceSum()
    {
        $sum = new Sum(Money::doller(3), Money::doller(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        $this->assertEquals(Money::doller(7), $result);
    }

    public function testReduceMoney()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::doller(1), "USD");
        $this->assertEquals(Money::doller(1), $result);
    }
}