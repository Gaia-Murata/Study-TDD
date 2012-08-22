<?php
require_once(dirname(__FILE__).'/../Dollar.php');
class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMlutiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}
?>
