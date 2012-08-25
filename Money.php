<?php
require_once 'Dollar.php';
require_once 'Franc.php';

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
		 && $this->currency === $object->currency;	
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
		return new Money($this->amount * $multiplier, $this->currency);
	}
	
	public function currency()
	{
		return $this->currency;
	}

}
