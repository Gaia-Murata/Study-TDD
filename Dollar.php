<?php
require_once 'Money.php';

class Dollar extends Money
{
	public function __construct($num)
	{
		$this->amount = $num;
	}

	public function times($multiplier)
	{
		
		return new Dollar($this->amount * $multiplier); 
	}
}



?>
