<?php
require_once(dirname(__FILE__).'/../Franc.php');
require_once(dirname(__FILE__).'/../Money.php');
class FrancTest extends PHPUnit_Framework_TestCase
{
    public function testFrancMlutiplication()
    {
        $five = Money::franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::franc(5)->equals(new Franc(5)));
        $this->assertFalse(Money::franc(5)->equals(new Franc(6)));
    }

}
?>
