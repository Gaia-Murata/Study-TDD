<?php
require_once 'Money.php';

class Dollar extends Money
{
	public function times($multiplier)
	{
		return new Dollar($this->amount * $multiplier, "USD"); 
	}
}
?>
