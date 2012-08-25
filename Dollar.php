<?php
require_once 'Money.php';

class Dollar extends Money
{
	public function times($multiplier)
	{
		return Money::dollar($this->amount * $multiplier); 
	}
}



?>
