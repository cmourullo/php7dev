<?php

/**
 * Interface Operation
 */
interface Operation
{
    /**
     * Operation constructor.
     * @param $firstOperator
     * @param $secondOperator
     */
    public function __construct($firstOperator, $secondOperator);

    /**
     * @return mixed
     */
    public function doOperation();
}