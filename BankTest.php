<?php
require_once 'Bank.php';
require_once 'Sum.php';

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

	public function testReduceSum()
	{
		$sum = new Sum(Money::dollar(3), Money::dollar(4));		
		$bank = new Bank();
		$result = $bank->reduce($sum, "USD");
		$this->assertEquals(Money::dollar(7), $result);
	}
}
