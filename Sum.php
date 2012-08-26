<?php
require_once 'Expression.php';

class Sum implements Expression
{
	public $augend;
	public $addend;	

	public function __construct($augendObject, $addendObject)
	{
		$this->augend = $augendObject;
		$this->addend = $addendObject;	
	}
}
