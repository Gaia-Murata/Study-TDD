<?php
class Dollar
{
   public $amount;

   function __construct($amount){
       $this->amount = $amount;
   }

   public function times($x)
   {
       $this->amount = $this->amount * $x;
   }
	
}