<?php

require_once 'Money.php';
require_once 'Dollar.php';
require_once 'Franc.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 9 test
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
            $money = new Money();
            $franc1  = $money->franc(10);
            $franc2  = new Franc(10);
            $this->assertEquals($franc1->currency(), $franc2->currency());
        
        
    }

}

