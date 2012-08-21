<?php
require_once dirname(__FILE__)."/Dollar.php";


class MoneyTest extends PHPUnit_Framework_TestCase{
	public function testMultiplication(){
     $five = new Dollar(5);
     $result = $five->times(2);
     $this->assertEquals(10, $result);

     $result = $five->times(3);
     $this->assertEquals(15, $result);
	}
	
	public function testEquals(){
		$ten = new Dollar(10);
		$ten_sub = new Dollar(10);
		$eleven = new Dollar(11);

		$this->assertTrue($ten->equals($ten_sub));
		$this->assertFalse($ten->equals($eleven));
	}
	
	/*Franc‚ÌƒeƒXƒg*/
	public function testFrancMultiplication(){
		$five = new Franc(5);
		$result = $five->times(2);
		$this->assertEquals(10, $result);
	
		$result = $five->times(3);
		$this->assertEquals(15, $result);
	}
	
	public function testFrancEquals(){
		$ten = new Franc(10);
		$ten_sub = new Franc(10);
		$eleven = new Franc(11);
	
		$this->assertTrue($ten->equals($ten_sub));
		$this->assertFalse($ten->equals($eleven));
	
	}
}