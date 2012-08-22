<?php

/**
 * MoneyClass 
 */
class Money
{
    protected $amount = 0;
    
    function __construct()
    {
    }

    static public function dollar($amount)
    {
        return New Dollar($amount);
    }

    static public function franc($amount)
    {
        return New Franc($amount);
    }

    public function equals($object)
    {
        return $this->amount === $object->amount
            && get_class($this) === get_class($object);
    }

}
