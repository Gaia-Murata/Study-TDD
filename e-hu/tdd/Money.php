<?php

require_once 'Dollar.php';
require_once 'Franc.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 10
 */
class Money
{
    public $amount;
    public $currency;

    function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals($money)
    {
        if($this->currency == $money->currency){
            return $this->amount == $money->amount;
        }
        return false;
    }

    public function times($time){
        return new Money($this->amount * $time, $this->currency);
    }
}
