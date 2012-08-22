<?php

require_once 'Money.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 9
 */
class Franc extends Money
{
    function __construct($amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
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
