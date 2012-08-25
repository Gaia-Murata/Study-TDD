<?php
require_once 'Money.php';

class Franc extends Money
{
	public function times($multiplier)
	{
		return Money::franc($this->amount * $multiplier, $this->currency);
	}
}
?>
