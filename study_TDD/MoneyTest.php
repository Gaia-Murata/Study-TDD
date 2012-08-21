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
	
		$this->assertTrue($ten->equals($ten_sub));
	}
}