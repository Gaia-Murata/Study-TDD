<?php
require_once(dirname(__FILE__).'/../Dollar.php');
require_once(dirname(__FILE__).'/../Money.php');
class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMlutiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }


    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(new Dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(new Dollar(6)));
    }

}
?>
