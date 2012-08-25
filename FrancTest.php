<?php
require_once 'Franc.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = new Money(5, null);
		$this->assertEquals(Money::franc(10), $five->franc(5)->times(2));
		$this->assertEquals(Money::franc(15), $five->franc(5)->times(3));
	}	
}
