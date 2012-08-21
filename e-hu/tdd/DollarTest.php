<?php

require_once 'Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $result = $dollar->times(2);
        $this->assertEquals(10, $dollar->amount);
    }
}

