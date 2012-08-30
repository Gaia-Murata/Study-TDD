<?php

require_once 'Money.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 13
 */
class Sum
{
    $augend;
    $addend;

    function __construct($augend, $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }
    
    public function plus($addend)
    {
        return new Sum($this, $addend);
    } 

}
