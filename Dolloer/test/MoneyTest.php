<?php
require_once(dirname(__FILE__).'/../Dollar.php');
require_once(dirname(__FILE__).'/../Franc.php');
require_once(dirname(__FILE__).'/../Money.php');

class FrancTest extends PHPUnit_Framework_TestCase
{
    
    public function testEquality()
    {
        $object = new Dollar(5);
        $this->assertTrue($object->equals(new Dollar(5)));
        $object = new Dollar(5);
        $this->assertFalse($object->equals(new Dollar(6)));
        $object = new Franc(5);
        $this->assertTrue($object->equals(new Franc(5)));
        $object = new Franc(5);
        $this->assertFalse($object->equals(new Franc(6)));
    }

}
?>
