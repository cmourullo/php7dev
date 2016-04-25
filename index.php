<?php
require_once 'library/HtmlRender.php';
require_once 'library/CsvRender.php';

$coordinates = array(
    array(1.23, 2.34),
    array(2.34, 3.45),
    array(4.54, 5.34),
    array(6.23, 7.34),
    array(8.23, 9.34),
);


//echo '<pre>';
//echo 'Coordinates:: ';
//print_r($coordinates);
//echo '</pre>';

// $render = new HtmlRender($coordinates);
$render = new CsvRender($coordinates);
echo '<pre>';
$render->getRenderization();
echo '</pre>';