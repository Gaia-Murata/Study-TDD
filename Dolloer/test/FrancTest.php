<?php
require_once(dirname(__FILE__).'/../Franc.php');
class FrancTest extends PHPUnit_Framework_TestCase
{
    public function testFrancMlutiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $object = new Franc(5);
        $this->assertTrue($object->equals(new Franc(5)));
        $object = new Franc(5);
        $this->assertFalse($object->equals(new Franc(6)));
    }

}
?>
