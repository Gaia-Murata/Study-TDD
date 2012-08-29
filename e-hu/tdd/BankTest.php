<?php

require_once 'Bank.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 14 test
 */
class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testEquals()
    {
        Bank::addRate("USD", "CHF", 2);
        $this->assertTrue(Money::dollar(5)->equals(Bank::reduce(Money::dollar(5), "USD")));
        $this->assertTrue(Money::dollar(5)->equals(Bank::reduce(Money::franc(10), "USD")));
        $this->assertTrue(Money::franc(10)->equals(Bank::reduce(Money::franc(10), "CHF")));
        $this->assertTrue(Money::franc(10)->equals(Bank::reduce(Money::dollar(5), "CHF")));
        $this->assertFalse(Money::dollar(5)->equals(Bank::reduce(Money::franc(5), "USD")));
        $this->assertFalse(Money::franc(5)->equals(Bank::reduce(Money::dollar(5), "CHF")));
    }

}

