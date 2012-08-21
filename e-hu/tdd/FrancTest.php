<?php

require_once 'Franc.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 5 test
 */
class FrancTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testMultiplication()
    {
        $cases = array(
            array('amount' => 0,  'time' => 1, 'result' => 0),
            array('amount' => 5,  'time' => 1, 'result' => 5),
            array('amount' => 5,  'time' => 2, 'result' => 10),
            array('amount' => 10, 'time' => 3, 'result' => 30),
            array('amount' => 20, 'time' => 5, 'result' => 100),
        );

        foreach ($cases as $case){
            $franc = new Franc($case['amount']);
            $result = $franc->times($case['time']);
            $this->assertEquals($case['result'], $result);
        }
    }

    public function testEquals()
    {
        $cases = array(
            array('amount1' => 5,   'amount2' => 5, 'time2' => 1),
            array('amount1' => 10,  'amount2' => 5, 'time2' => 2),
            array('amount1' => 15,  'amount2' => 5, 'time2' => 3),
            array('amount1' => 50,  'amount2' => 50, 'time2' => 1),
            array('amount1' => 50,  'amount2' => 10, 'time2' => 5),
        );

        foreach ($cases as $case){
            $franc1 = new Franc($case['amount1']);
            $franc2 = new Franc($case['amount2']);
            $this->assertEquals($franc1->amount, $franc2->times($case['time2']));
        }
        
    }

}

