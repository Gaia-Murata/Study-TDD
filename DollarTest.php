<?php
require_once 'Dollar.php';
require_once 'Franc.php';

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
		$money = new Money();
		$dollar= $money->dollar(5);
		$this->assertTrue($dollar->equals($money->dollar(5)));
		$this->assertFalse($dollar->equals($money->dollar(6)));

		$franc = $money->franc(5);
		$this->assertTrue($franc->equals($money->franc(5)));
		$this->assertFalse($franc->equals($money->franc(6)));
		$this->assertFalse($franc->equals($money->dollar(5)));
	}
}
