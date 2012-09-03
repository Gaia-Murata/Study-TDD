<?php

require_once 'Bank.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 16
 */
class Money
{
    private $amount;
    private $currency;

    function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function equals($money)
    {
        if($this->currency == $money->currency){
            return $this->amount == $money->amount;
        }
        return false;
    }

    public function times($time)
    {
        return new Money($this->amount * $time, $this->currency);
    }

    public function plus($addend)
    {
       if($this->getCurrency() == $addend->getCurrency()){
           return new Money($this->getAmount() + $addend->getAmount(), $this->getCurrency()); 
       }
       $reduce = Bank::reduce($addend, $this->getCurrency());
       return new Money($this->getAmount() + $reduce->getAmount(), $this->getCurrency());
    }   
}
