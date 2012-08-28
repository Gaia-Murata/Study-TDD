<?php

require_once 'Money.php';
require_once 'Dollar.php';
require_once 'Franc.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 11 test
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
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertTrue(Money::dollar(10)->equals(Money::dollar(10)));
        $this->assertTrue(Money::dollar(15)->equals(Money::dollar(15)));
        $this->assertFalse(Money::dollar(15)->equals(Money::franc(15)));
        $this->assertFalse(Money::dollar(10)->equals(Money::franc(10)));
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

}

