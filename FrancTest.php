<?php
require_once 'Franc.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = new Franc(5);		
		$this->assertEquals(new Franc(10), $five->times(2));
		$this->assertEquals(new Franc(15), $five->times(3));
	}	

	public function testEquality()
	{
		$five = new Franc(5);
		$this->assertTrue($five->equals(new Franc(5)));
		$this->assertFalse($five->equals(new Franc(6)));
	}
}
