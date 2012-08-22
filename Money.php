<?php

class Money
{
	protected $amount;	
	
	public function equals($object)
	{
		return $this->amount === $object->amount
		 && get_class($this) === get_class($object);	
	}

}
