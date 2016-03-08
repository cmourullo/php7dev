<?php
use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function inputNumbers()
    {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2],
            [-9, -9, -18]
        ];
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($x, $y, $sum)
    {
        $calc = new Calculator;

        $this->assertEquals($sum, $calc->add($x, $y));
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