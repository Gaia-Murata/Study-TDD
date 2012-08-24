<?php
require_once 'Money.php';
require_once 'Dollar.php';
//require_once 'Franc.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$money = new Money();		
		$five = $money->dollar(5);
		$this->assertEquals($money->dollar(10), $five->times(2));
		$this->assertEquals($money->dollar(15), $five->times(3));
	}	

	public function testEquality()
	{
		$dollar= Money::dollar(5);
		$this->assertTrue($dollar->equals(Money::dollar(5)));
		$this->assertFalse($dollar->equals(Money::dollar(6)));

		$franc = Money::franc(5);
		$this->assertTrue($franc->equals(Money::franc(5)));
		$this->assertFalse($franc->equals(Money::franc(6)));
		$this->assertFalse($franc->equals(Money::dollar(5)));
	}
}
