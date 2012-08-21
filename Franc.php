<?php

class Franc
{
	private $amount;

	public function __construct($num)
	{
		$this->amount = $num;
	}

	public function times($multiplier)
	{
		//$this->amount *= $multiplier;	
		
		return new Franc($this->amount * $multiplier); 
	}

	public function equals($object)
	{
		return $this->amount === $object->amount;	
	}
	
}



?>
