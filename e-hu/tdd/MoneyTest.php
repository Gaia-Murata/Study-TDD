<?php

require_once 'Bank.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 16 test
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
        $dollar = new Money(5,  "USD");
        $this->assertTrue($dollar->equals(new Money(5,  "USD")));
        $franc = new Money(5,  "CHF");
        $this->assertTrue($franc->equals(new Money(5,  "CHF")));
        $this->assertFalse($franc->equals($dollar));

        $dollar = new Money(10,  "USD");
        $this->assertTrue($dollar->equals(new Money(10,  "USD")));
        $franc = new Money(10,  "CHF");
        $this->assertTrue($franc->equals(new Money(10,  "CHF")));
        $this->assertFalse($franc->equals($dollar));
    }

    public function testTimes()
    {
        $dollar = new Money(10, "USD");
        $franc = new Money(10, "CHF");

        $this->assertTrue($dollar->times(3)->equals(new Money(30, "USD")));
        $this->assertTrue($dollar->times(5)->equals(new Money(50, "USD")));
        $this->assertTrue($franc->times(3)->equals(new Money(30, "CHF")));
        $this->assertTrue($franc->times(5)->equals(new Money(50, "CHF")));
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

