<?php

/**
 * Class OperationHandler: is the class who handle all the Operations. To include a new Operation
 * is necessary create the new Class extending OperationController class implement the Interface
 * Operation and the new case.
 */
class OperationHandler
{
    /**
     * @param $queryOperation
     * @return string
     */
    public function doOperation($queryOperation)
    {
        $operationRequested = strtolower($queryOperation[1]);
        $firstElement = (int)$queryOperation[0];
        $secondElement = (int)$queryOperation[2];

        try{
            if(isset($operationRequested)) {
                switch ($operationRequested) {
                    case 'plus':
                        $operation = 'Addition';
                        break;
                    case 'minus':
                        $operation = 'Subtraction';
                        break;
                    case 'times':
                        $operation = 'Multiplication';
                        break;
                    case 'divide':
                        $operation = 'Division';
                        break;
                }

                // Create generic Operation
                $controller = new $operation($firstElement, $secondElement);

                // Obtain the operation result
                $total = $controller->doOperation();
                $result = "## The result of the operation $operation $firstElement and $secondElement is $total \n";

                return $result;
            } else {
                throw new Exception('Requested operation empty.', 2);
            }
        }catch(Exception $e){
            echo $e;
        }
    }
}