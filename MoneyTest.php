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
		$this->assertFalse(Money::dollar(5)->equals(Money::franc(6)));		
	}

	public function testCurrency()
	{
		$this->assertEquals("USD", Money::dollar(1)->getCurrency());		
		$this->assertEquals("CHF", Money::franc(1)->getCurrency());		
		
	}
	public function testSimpleAddition()
	{
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		$bank = new Bank();
		$reduced = $bank->reduce($sum, "USD");
		$this->assertEquals(Money::dollar(10), $reduced);
	}
}
?>
