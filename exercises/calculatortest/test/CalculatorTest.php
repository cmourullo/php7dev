<?php

require 'app/libraries/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function testAddNumnbers()
    {
        $calc = new Calculator;
        $this->assertEquals(4, $calc->add(2,2));
    }
}