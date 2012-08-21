<?php

class Dollar
{
	protected $amount;

	public function __construct($num)
	{
		$this->amount = $num;
	}

	public	function times($multiplier)
	{
		$this->amount *= $multiplier;	
		
		return $this->amount;
	}
	
}



?>
