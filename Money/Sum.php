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

	public function reduce($bank, $stringCurrencyTo)
	{
		$amount = $this->augend->reduce($bank, $stringCurrencyTo)->getAmount()
			+ $this->addend->reduce($bank, $stringCurrencyTo)->getAmount();		
		
		return new Money($amount, $stringCurrencyTo);
	}
	
	public function plus($addendObject)
	{
		return new Sum($this, $addendObject);
	}

	public function times($multiplier)
	{
		return new Sum($this->augend->times($multiplier), $this->addend->times($multiplier));
	}
}
