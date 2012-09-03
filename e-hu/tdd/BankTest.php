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

    public function testReduce()
    {        
        Bank::addRate("USD", "CHF", 2);

        $dollar = new Money(5,  "USD");
        $this->assertTrue($dollar->equals(Bank::reduce(new Money(5,   "USD"), "USD")));
        $this->assertTrue($dollar->equals(Bank::reduce(new Money(10,  "CHF"), "USD")));

        $franc = new Money(10,  "CHF");
        $this->assertTrue($franc->equals(Bank::reduce(new Money(10,  "CHF"), "CHF")));
        $this->assertTrue($franc->equals(Bank::reduce(new Money(5,   "USD"), "CHF")));
    }

}

