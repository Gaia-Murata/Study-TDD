<?php
class Dollar
{
   public $amount;

   function __construct($amount){
       $this->amount = $amount;
   }

   public function times($x)
   {
       return $this->amount * $x;
   }
	
}