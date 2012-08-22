<?php
require_once 'Dollar.php';
require_once 'Franc.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = new Dollar(5);		
		$this->assertEquals(new Dollar(10), $five->times(2));
		$this->assertEquals(new Dollar(15), $five->times(3));
	}	

	public function testEquality()
	{
		$dollar= new Dollar(5);
		$this->assertTrue($dollar->equals(new Dollar(5)));
		$this->assertFalse($dollar->equals(new Dollar(6)));
		$franc = new Franc(5);
		$this->assertTrue($franc->equals(new Franc(5)));
		$this->assertFalse($franc->equals(new Franc(6)));
		$this->assertFalse($franc->equals(new Dollar(5)));
	}
}
