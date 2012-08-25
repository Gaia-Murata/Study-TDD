<?php
require_once 'Franc.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = new Money(5, null);
		$this->assertTrue(Money::franc(10)->equals($five->franc(5)->times(2)));
		$this->assertTrue(Money::franc(15)->equals($five->franc(5)->times(3)));
	}	
}
