<?php

/**
 * Class Subtraction
 */
class Subtraction extends OperatorController implements Operation
{
    /**
     * Subtraction constructor.
     * @param $firstOperator
     * @param $secondOperator
     */
    public function __construct($firstOperator, $secondOperator)
    {
        parent::__construct($firstOperator, $secondOperator);
        return true;
    }

    /**
     * @return integer
     */
    public function doOperation()
    {
        $firstOperator = $this->getFirstOperator();
        $secondOperator = $this->getSecondOperator();

        $result = (int)($firstOperator - $secondOperator);
        return $result;
    }
}