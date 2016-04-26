<?php

/**
 * Class Division
 */
class Division extends OperatorController implements Operation
{
    /**
     * Division constructor.
     * @param $firstOperator
     * @param $secondOperator
     */
    public function __construct($firstOperator, $secondOperator)
    {
       parent::__construct($firstOperator, $secondOperator);
        return true;
    }

    /**
     * @return float
     */
    public function doOperation()
    {
        $firstOperator = $this->getFirstOperator();
        $secondOperator = $this->getSecondOperator();

        $result = (float)($firstOperator / $secondOperator);
        return $result;
    }
}