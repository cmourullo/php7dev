<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 26/04/2016
 * Time: 19:06
 */

interface Operation
{
    public function __construct($firstOperator, $secondOperator);
    public function doOperation();
}