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

	public function testCurrency()
	{
		$this->assertEquals("USD", Money::dollar(1)->currency());
	}
}
