<?php

class Money
{
	protected $amount;	
	protected $currency;
	
	public function __construct($amount, $currency)
	{
		$this->amount = $amount;		
		$this->currency = $currency;
	}
	public function equals($object)
	{
		return $this->amount === $object->amount
		 && get_class($this) === get_class($object);	
	}

	public static function dollar($amount)
	{
		return new Dollar($amount, "USD");		
	}

 	public static function franc($amount)
	{
		return new Franc($amount, "CHF");		
	}	

	public function times($multiplier)
	{
		
	}
	
	public function currency()
	{
		return $this->currency;
	}

}
