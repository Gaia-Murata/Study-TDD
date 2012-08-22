<?php

class Money{
	protected $amount;
	protected $currency;
	
	public function equals($money){
		if($money instanceof Money){
          return($this->amount === $money->amount && get_class($this) === get_class($money));
		}
		return false;
	}
	
	public function currency(){
		return $this->currency;
	}
}