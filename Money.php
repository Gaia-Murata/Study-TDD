<?php

class Money
{
	protected $amount;	
	
	public function equals($object)
	{
		return $this->amount === $object->amount
		 && get_class($this) === get_class($object);	
	}

	public function dollar($amount)
	{
		return new Dollar($amount);		
	}

 	public function franc($amount)
	{
		return new Franc($amount);		
	}	

	public function times($multiplier){
		
		}
		

}
