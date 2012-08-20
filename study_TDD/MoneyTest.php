<?php
require_once dirname(__FILE__)."/Dollar.php";


class MoneyTest extends PHPUnit_Framework_TestCase{
	public function testMultiplication(){
		$five = new Dollar(5);
		$five->times(2);
		assertEquals(10, $five->amount);
	}
}