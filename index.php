<?php
spl_autoload_register(function($className) {
    $path = dirname(__FILE__)."/library/$className.php";
    if(file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception('Requested operation is incorrect.', 2);
    }
});

$queryOperations[] = array(5, 'Plus', 3);
$queryOperations[] = array(5, 'Minus', 3);
$queryOperations[] = array(2, 'Times', 8);
$queryOperations[] = array(8, 'Divide', 2);

$operationHandler = new OperationHandler();

foreach ($queryOperations as $queryOperation){
    echo '<pre>';
    echo $operationHandler->doOperation($queryOperation);
    echo '</pre>';
}


