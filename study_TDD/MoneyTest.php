<?php
require_once dirname(__FILE__)."/Dollar.php";


class MoneyTest extends PHPUnit_Framework_TestCase{
  public function testMultiplication(){
      $five_dollar = new Dollar(5);
      $ten_dollar = new Dollar(10);
      $fifteen_dollar = new Dollar(15);

      $result = $five_dollar->times(2);
      $this->assertTrue($ten_dollar->equals($result));

      $result = $five_dollar->times(3);
      $this->assertTrue($fifteen_dollar->equals($result));

      $five_franc = new Franc(5);
      $ten_franc = new Franc(10);
      $fifteen_franc = new Franc(15);
      $result = $five_franc->times(2);
      $this->assertTrue($ten_franc->equals($result));

      $result = $five_franc->times(3);
      $this->assertTrue($fifteen_franc->equals($result));
 }

   public function testEquals(){
       $ten_dollar = new Dollar(10);

       $this->assertTrue($ten_dollar->equals(new Dollar(10)));
       $this->assertFalse($ten_dollar->equals(new Dollar(11)));

       $ten_franc = new Franc(10);

       $this->assertTrue($ten_franc->equals(new Franc(10)));
       $this->assertFalse($ten_franc->equals(new Franc(11)));
       
       $this->assertFalse($ten_dollar->equals($ten_franc));

   }
   
   public function testCurrency(){
   	$dollar = new Dollar(1);
   	$franc = new Franc(1);
   
   	$this->assertEquals("USD", $dollar->currency());
   	$this->assertEquals("CHF", $franc->currency());
   }
}