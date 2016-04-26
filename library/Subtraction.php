<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 26/04/2016
 * Time: 19:11
 */
class Subtraction extends OperatorController implements Operation
{
    public function __construct($firstOperator, $secondOperator)
    {
        parent::__construct($firstOperator, $secondOperator);
        return true;
    }

    public function doOperation()
    {
        $firstOperator = $this->getFirstOperator();
        $secondOperator = $this->getSecondOperator();

        $result = $firstOperator - $secondOperator;
        return $result;
    }
}