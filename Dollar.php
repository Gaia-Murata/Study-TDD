<?php
require_once 'Money.php';

class Dollar extends Money
{
	public function times($multiplier)
	{
		return new Money($this->amount * $multiplier, $this->currency); 
	}
}
?>
