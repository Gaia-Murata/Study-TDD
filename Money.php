<?php
require_once 'Bank.php';
require_once 'Expression.php';
require_once 'Sum.php';

class Money implements Expression
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
		return new Money($amount, "USD");		
	}

 	public static function franc($amount)
	{
		return new Money($amount, "CHF");		
	}	

	public function times($multiplier)
	{
		return new Money($this->amount * $multiplier, $this->currency);
	}
	
	public function getCurrency()
	{
		return $this->currency;
	}
	
	public function plus($addendObject)
	{
		return new Sum($this, $addendObject);
	}

	public function getAmount()
	{
		return $this->amount;
	}
	
	public function reduce($stringCurrencyTo)
	{
		return $this;		
	}

}
