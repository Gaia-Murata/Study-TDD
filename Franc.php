<?php
require_once 'Money.php';

class Franc extends Money
{
	public function __construct($num)
	{
		$this->amount = $num;
	}

	public function times($multiplier)
	{
		//$this->amount *= $multiplier;	
		
		return new Franc($this->amount * $multiplier); 
	}
}



?>
