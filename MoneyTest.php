<?php
require_once 'Money.php';

class MoneyTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = Money::dollar(5);
		$this->assertTrue(Money::dollar(10)->equals($five->times(2)));	
		$this->assertTrue(Money::dollar(15)->equals($five->times(3)));	
	}

	public function testEquality()
	{
		$this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));		
		$this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));		
		$this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));		
	}

	public function testCurrency()
	{
		$this->assertEquals("USD", Money::dollar(1)->currency());		
		$this->assertEquals("CHF", Money::franc(1)->currency());		
	}

	public function testSimpleAddition()
	{
		$sum = Money::dollar(5)->plus(Money::dollar(5));		
		$bank = new Bank();
		$reduced = $bank->reduce($sum, "USD");
		$this->assertEquals($reduced, Money::dollar(10));	
	}
}
?>
