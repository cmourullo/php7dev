<?php

$queryOperation = array(5, 'Plus', 3);
$firstElement = (int)$queryOperation[0];
$secondElement = (int)$queryOperation[2];
$operationRequested = strtolower($queryOperation[1]);
//$operation = array(2, 'Times', 8);

echo "Operation: $operationRequested";

spl_autoload_register(function($className) {
    $path = dirname(__FILE__)."/library/$className.php";
    if(file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception('Requested operation is incorrect.', 2);
    }
});

try{
    if(isset($operationRequested)) {
        switch ($operationRequested) {
            case 'plus':
                $operation = 'Addition';
                break;
        }

        $controller = new $operation($firstElement, $secondElement);
        $result = $controller->doOperation();

        echo ' ## Result:: '.$result;
    } else {
        throw new Exception('Requested operation empty.', 2);
    }
}catch(Exception $e){
    echo $e;
    die('<h1>404 Not Found</h1>');
}


