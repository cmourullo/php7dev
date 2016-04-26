<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 26/04/2016
 * Time: 18:38
 */
class OperatorController
{
    private $firstOperator;
    private $secondOperator;

    public function __construct($firstOperator, $secondOperator)
    {
        $this->setFirstOperator($firstOperator);
        $this->setSecondOperator($secondOperator);
        return true;
    }

    public function setFirstOperator($operator)
    {
        $this->firstOperator = (int)$operator;
        return true;
    }

    public function setSecondOperator($operator)
    {
        $this->secondOperator = (int)$operator;
        return true;
    }

    public function getFirstOperator()
    {
        return $this->firstOperator;
    }

    public function getSecondOperator()
    {
        return $this->secondOperator;
    }
}