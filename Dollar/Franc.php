<?php
require_once(dirname(__FILE__).'/./Money.php');
/**
 * Franc
 */
class Franc extends Money
{
    function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return New Franc($this->amount * $multiplier); 
    }

}
