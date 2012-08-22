<?php
 require_once dirname(__FILE__).'/Money.php';

 class Dollar extends Money
{
    function __construct($amount){
        $this->amount = $amount;
    }
    
    public function times($x){
    	return new Dollar($this->amount * $x);
    }
}