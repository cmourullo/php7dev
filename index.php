<?php
/**
 * Author: Carlos Mourullo (carlosmourullo@gmail.com)
 * Date: 26/04/2016
 */
require_once 'library/HtmlRender.php';
require_once 'library/CsvRender.php';

// Create coordinates examples
$coordinates = array(
    array(1.23, 2.34),
    array(2.34, 3.45),
    array(4.54, 5.34),
    array(6.23, 7.34),
    array(8.23, 9.34),
);

// Create renders
$renderHtml = new HtmlRender($coordinates);
$renderCsv = new CsvRender($coordinates);

// Rendering coordinates
$renderHtml->getRendering();
echo "<pre>";
$renderCsv->getRendering();
echo "</pre>";