<?php
require_once 'Expression.php';

class Sum implements Expression
{
	public $augend;
	public $addend;	

	public function __construct($augendObject, $addendObject)
	{
		$this->augend = $augendObject;
		$this->addend = $addendObject;	
	}

	public function reduce($stringCurrencyTo)
	{
		$amount = $this->augend->getAmount() + $this->addend->getAmount();		
		
		return new Money($amount, $stringCurrencyTo);
	}
}
