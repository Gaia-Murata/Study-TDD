<?php

/**
 * @author Ethan Hu
 * 
 * Chapter 1
 */
class DollarTest extends PHPUnit_Framework_TestCase
class Dollar
{
    public $amount;

    function __construct($amount)
    {
        $this->amount = $amount;
    }
 
    public function times($multiplier){
        $this->amount *= $multiplier;
    }
}
