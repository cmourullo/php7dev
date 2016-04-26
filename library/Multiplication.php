<?php

/**
 * Class Multiplication
 */
class Multiplication extends OperatorController implements Operation
{
    /**
     * Multiplication constructor.
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

        $result = (int)($firstOperator * $secondOperator);
        return $result;
    }
}