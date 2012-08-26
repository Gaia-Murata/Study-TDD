<?php
require_once 'Money.php';

class Bank
{
	public function reduce($sourceObject, $stringCurrencyTo)	
	{
		$sum = new Sum($sourceObject->augend, $sourceObject->addend);
		$amount = $sum->augend->getAmount() + $sum->addend->getAmount();
		return new Money($amount, $stringCurrencyTo);
	}
}
