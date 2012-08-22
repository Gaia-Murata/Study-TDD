<?php

require_once 'Money.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 8
 */
class Dollar extends Money
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

    public function equals(&$money)
    {
        return $this->amount == $money->amount;
    }

}
