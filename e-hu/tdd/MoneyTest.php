<?php

require_once 'Money.php';
require_once 'Dollar.php';
require_once 'Franc.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 10 test
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
        $dollar = new Money(5, 'USD');
        $franc  = new Money(5, 'CHF');
        $this->assertFalse($dollar->equals($franc));
    }

}

