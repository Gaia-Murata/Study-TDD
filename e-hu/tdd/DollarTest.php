<?php

require_once 'Dollar.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 3 test
 */
class DollarTest extends PHPUnit_Framework_TestCase
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
            $dollar = new Dollar($case['amount']);
            $result = $dollar->times($case['time']);
            $this->assertEquals($case['result'], $result);
        }
    }

    public function testEquals()
    {
        $cases = array(
            array('amount1' => 5,   'amount2' => 5, 'result' => true),
            array('amount1' => 10,  'amount2' => 10, 'result' => true),
            array('amount1' => 15,  'amount2' => 15, 'result' => true),
            array('amount1' => 20,  'amount2' => 15, 'result' => false),
            array('amount1' => 30,  'amount2' => 40, 'result' => false),
        );

        foreach ($cases as $case){
            $dollar1 = new Dollar($case['amount1']);
            $dollar2 = new Dollar($case['amount2']);
            $this->assertEquals($dollar1->equals($dollar2), $case['result']);
        }
        
    }

}

