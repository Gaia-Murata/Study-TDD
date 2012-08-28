<?php 
interface Expression
{
	public function reduce($bank, $stringCurrencyTo);	
	public function plus($addendObject);
	public function times($multiplier);
}

