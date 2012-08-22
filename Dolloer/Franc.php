<?php
/**
 * Franc
 */
class Franc
{
    private $amount = 0 ;

    function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return New Franc($this->amount * $multiplier); 
    }

    public function equals($object)
    {
        return $this->amount === $object->amount;
    }
}
