<?php

/**
 * @author Ethan Hu
 * 
 * Chapter 3
 */
class Dollar
{
    private $amount;

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
