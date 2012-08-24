<?php
require_once 'Franc.php';
require_once 'Money.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = new Money(5, null);
		$this->assertEquals(Money::franc(10), $five->franc(5)->times(2));
		$this->assertEquals(Money::franc(15), $five->franc(5)->times(3));
	}	

	public function testEquality()
	{
		$five = new Money(5, null);
		$this->assertTrue($five->franc(5)->equals(Money::franc(5)));
		$this->assertFalse($five->franc(5)->equals(Money::franc(6)));
	}

	public function testCurrency()
	{
		$this->assertEquals("CHF", Money::franc(1)->currency());
	}
}
