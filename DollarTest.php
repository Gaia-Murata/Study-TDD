<?php
require_once 'Money.php';
require_once 'Dollar.php';
require_once 'Franc.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$money = new Money(5, null);

		$this->assertEquals(Money::dollar(10), $money->dollar(5)->times(2));
		$this->assertEquals(Money::dollar(15), $money->dollar(5)->times(3));
	}	
}
