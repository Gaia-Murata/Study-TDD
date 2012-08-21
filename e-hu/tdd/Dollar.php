<?php

/**
 * @author Ethan Hu
 * 
 * Chapter 2
 */
class Dollar
{
    public $amount;

    function __construct($amount)
    {
        $this->amount = $amount;
    }
 
    public function times($multiplier){
        return $this->amount * $multiplier;
    }
}
