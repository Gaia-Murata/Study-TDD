<?php
class Dollar
{
   private $amount;

   function __construct($amount){
       $this->amount = $amount;
   }

   public function times($x)
   {
       return $this->amount * $x;
   }
	
   public function equals($doll){
   	return($this->amount === $doll->amount);
   }
}