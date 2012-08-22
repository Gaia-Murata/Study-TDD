<?php
require_once(dirname(__FILE__).'/../Dollar.php');
class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMlutiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $object = new Dollar(5);
        $this->assertTrue($object->equals(new Dollar(5)));
        $object = new Dollar(5);
        $this->assertFalse($object->equals(new Dollar(6)));
    }

}
?>
