<?php

/**
 * Class Addition
 */
class Addition extends OperatorController implements Operation
{
    /**
     * Addition constructor.
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

        $result = (int)($firstOperator + $secondOperator);
        return $result;
    }
}