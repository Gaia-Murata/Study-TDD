<?php
 require_once dirname(__FILE__).'/Money.php';

 class Dollar extends Money
{
    function __construct($amount){
        $this->amount = $amount;
    }

    public function times($x)
    {
        return $this->amount * $x;
    }

    public function equals($money){
        if($money instanceof Money)return($this->amount === $money->amount);
        return false;
    }
}