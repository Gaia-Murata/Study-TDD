<?php
require_once 'Money.php';

class BankTest extends PHPUnit_Framework_TestCase
{
	public function testSimpleAddition()
	{
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		$bank = new Bank();
		$reduced = $bank->reduce($sum, "USD");		
		$this->assertEquals(Money::dollar(10), $reduced);
	}
}
