<?php
use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function testAddNumnbers()
    {
        $calc = new Calculator;
        $this->assertEquals(4, $calc->add(2,2));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfNonNumericIsPassed()
    {
        $calc = new Calculator;
        $calc->add('a', []);
    }
}