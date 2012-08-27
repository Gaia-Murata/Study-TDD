<?php
require_once 'Money.php';

class Bank
{
	public function reduce($sourceObject, $stringCurrencyTo)	
	{
		return $sourceObject->reduce($this, $stringCurrencyTo);
	}

	public function rate($stringCurrencyFrom, $stringCurrencyTo)
	{
		if ($stringCurrencyFrom === "CHF" && $stringCurrencyTo === "USD") {
			$rate = 2;
		} else {
			$rate = 1;
		}

		return $rate;
	}
}
