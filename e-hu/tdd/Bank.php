<?php

require_once 'Money.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 12
 */
class Bank
{
    public function reduce()
    {
        return Money::dollar(10);
    }

}
