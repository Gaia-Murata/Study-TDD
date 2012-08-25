<?php
require_once 'Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$money = new Money(5, null);
		$this->assertTrue(Money::dollar(10)->equals($money->dollar(5)->times(2)));
		$this->assertTrue(Money::dollar(15)->equals($money->dollar(5)->times(3)));
	}	
}
