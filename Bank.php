<?php
require_once 'Money.php';

class Bank
{
	public $rates;

	public function __construct() {
		$this->rates = array();
	}

	public function reduce($sourceObject, $stringCurrencyTo)	
	{
		return $sourceObject->reduce($this, $stringCurrencyTo);
	}

	public function getRate($stringCurrencyFrom, $stringCurrencyTo)
	{
		if ($stringCurrencyFrom === $stringCurrencyTo) {
			return 1;
		}

		$pair = $stringCurrencyFrom.$stringCurrencyTo;

		return $this->rates["$pair"];
	}

	public function setRate($stringCurrencyFrom , $stringCurrencyTo, $rate)
	{
		$pair = $stringCurrencyFrom.$stringCurrencyTo;
		$this->rates[$pair] = $rate;
	}

	public function rate($stringCurrencyFrom, $stringCurrencyTo)
	{
		$rate = $this->getRate($stringCurrencyFrom, $stringCurrencyTo);

		return (int) $rate;
	}
}
