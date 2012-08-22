<?php
/**
 * Dollar
 */
class Dollar
{
    public $amount = 0 ;

    function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return New Dollar($this->amount * $multiplier); 
    }
}
