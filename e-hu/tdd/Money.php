<?php

require_once 'Dollar.php';
require_once 'Franc.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 8
 */
class Money
{
    public $amount;
    public $currency;

    public function dollar($amount)
    {
        return new Dollar($amount);
    }

    public function franc($amount)
    {
        return new Franc($amount);
    }

    public function currency()
    {
        return $this->currency;
    }

}
