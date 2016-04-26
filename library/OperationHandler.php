<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 26/04/2016
 * Time: 18:46
 */

class OperationHandler
{
    public function doOperation($queryOperation)
    {
        $operationRequested = strtolower($queryOperation[1]);

        try{
            if(isset($operationRequested)) {
                switch ($operationRequested) {
                    case 'plus':
                        $operation = 'Addition';
                        break;
                    case 'minus':
                        $operation = 'Subtraction';
                        break;
//                    case 'times':
//                        $operation = 'Multiplication';
//                        break;
//                    case 'divide':
//                        $operation = 'Division';
//                        break;
                }

                $controller = new $operation($queryOperation[0], $queryOperation[2]);
                $result = $controller->doOperation();

                return "## Result:: $result \n";
            } else {
                throw new Exception('Requested operation empty.', 2);
            }
        }catch(Exception $e){
            echo $e;
            die('<h1>404 Not Found</h1>');
        }
    }

}