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

    public function equals($object)
    {
        return $this->amount === $object->amount;
    }
}
