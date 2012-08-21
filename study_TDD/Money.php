<?php

class Money{
	protected $amount;

	public function equals($money){
		if($money instanceof Money){
			return($this->amount === $money->amount);
		}
		return false;
	}

}