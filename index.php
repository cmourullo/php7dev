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
$queryOperations[] = array(5, 'Plus', 3);
$queryOperations[] = array(5, 'Plus', 3);

$operationHandler = new OperationHandler();

foreach ($queryOperations as $queryOperation){
    echo $operationHandler->doOperation($queryOperation);
}


