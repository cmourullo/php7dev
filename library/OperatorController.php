<?php

/**
 * Class OperatorController
 */
class OperatorController
{
    /**
     * @var
     */
    private $firstOperator;
    /**
     * @var
     */
    private $secondOperator;

    /**
     * OperatorController constructor.
     * @param $firstOperator
     * @param $secondOperator
     */
    public function __construct($firstOperator, $secondOperator)
    {
        $this->setFirstOperator($firstOperator);
        $this->setSecondOperator($secondOperator);
        return true;
    }

    /**
     * @param $operator
     * @return bool
     */
    public function setFirstOperator($operator)
    {
        $this->firstOperator = (int)$operator;
        return true;
    }

    /**
     * @param $operator
     * @return bool
     */
    public function setSecondOperator($operator)
    {
        $this->secondOperator = (int)$operator;
        return true;
    }

    /**
     * @return mixed
     */
    public function getFirstOperator()
    {
        return $this->firstOperator;
    }

    /**
     * @return mixed
     */
    public function getSecondOperator()
    {
        return $this->secondOperator;
    }
}