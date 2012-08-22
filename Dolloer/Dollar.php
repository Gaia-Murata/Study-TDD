<?php
require_once(dirname(__FILE__).'/./Money.php');
/**
 * Dollar
 */
class Dollar extends Money
{
    function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return New Dollar($this->amount * $multiplier); 
    }

}
