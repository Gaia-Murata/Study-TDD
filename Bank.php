<?php
require_once 'Money.php';

class Bank
{
	public function reduce($sourceObject, $stringCurrencyTo)	
	{
		return $sourceObject->reduce($stringCurrencyTo);
	}

}
