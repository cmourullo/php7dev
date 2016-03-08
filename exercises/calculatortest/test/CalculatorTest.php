<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function testAddNumnbers()
    {
        $calc = new Calculator;
        $this->assertEquals(4, $calc->add(2,2));
    }
}