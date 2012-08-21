<?php

/**
 * @author Ethan Hu
 * 
 * Chapter 4
 */
class Dollar
{
    public $amount;

    function __construct($amount)
    {
        $this->amount = $amount;
    }
 
    public function times($multiplier)
    {
        return $this->amount * $multiplier;
    }

    public function equals(&$dollar)
    {
        return $this->amount == $dollar->amount;
    }
}
