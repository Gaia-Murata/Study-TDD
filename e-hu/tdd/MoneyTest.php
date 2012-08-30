<?php

require_once 'Money.php';
require_once 'Dollar.php';
require_once 'Franc.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 15 test
 */
class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testGetAmount()
    {
        $dollar = new Money(10, "USD");
        $franc = new Money(10, "CHF");

        $this->assertEquals($dollar->getAmount(), 10);
        $this->assertEquals($franc->getAmount(), 10);
    }

    public function testGetCurrency()
    {
        $dollar = new Money(10, "USD");
        $franc = new Money(10, "CHF");

        $this->assertEquals($dollar->getCurrency(), "USD");
        $this->assertEquals($franc->getCurrency(), "CHF");
    }


    public function testEquals()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertTrue(Money::dollar(10)->equals(Money::dollar(10)));
        $this->assertTrue(Money::dollar(15)->equals(Money::dollar(15)));
        $this->assertFalse(Money::dollar(15)->equals(Money::franc(15)));
        $this->assertFalse(Money::dollar(10)->equals(Money::franc(10)));
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testTimes()
    {
        $dollar = new Money(10, "USD");
        $franc = new Money(10, "CHF");

        $this->assertTrue($dollar->times(3)->equals(Money::dollar(30)));
        $this->assertTrue($franc->times(3)->equals(Money::franc(30)));
        $this->assertTrue($dollar->times(5)->equals(Money::dollar(50)));
        $this->assertTrue($franc->times(5)->equals(Money::franc(50)));
    }

    public function testPlus()
    {
        Bank::addRate("USD", "CHF", 2);

        $dollar = new Money(10, "USD");
        $franc = new Money(10, "CHF");

        $this->assertTrue($dollar->plus($franc)->equals(new Money(15, "USD")));
        $this->assertTrue($franc->plus($dollar)->equals(new Money(30, "CHF")));
        $this->assertTrue(Bank::reduce($dollar->plus($franc), "USD")->equals(new Money(15, "USD")));
        $this->assertTrue(Bank::reduce($franc->plus($dollar), "CHF")->equals(new Money(30, "CHF")));
        $this->assertTrue(Bank::reduce($dollar->plus($franc), "CHF")->equals(new Money(30, "CHF")));
        $this->assertTrue(Bank::reduce($franc->plus($dollar), "USD")->equals(new Money(15, "USD")));
    }


}

