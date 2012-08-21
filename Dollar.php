<?php

class Dollar
{
	public function __construct($num)
	{
		$this->amount = $num;
	}

	public	function times($multiplier)
	{
		//$this->amount *= $multiplier;	
		
		return new Dollar($this->amount * $multiplier); 
	}
	
}



?>
