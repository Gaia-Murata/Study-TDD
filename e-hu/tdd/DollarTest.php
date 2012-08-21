<?php

require_once 'Dollar.php';
/**
 * @author Ethan Hu
 * 
 * Chapter 2 test
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
}

