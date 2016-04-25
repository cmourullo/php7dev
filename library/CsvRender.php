<?php
require_once 'library/Render.php';
require_once 'library/OutputHandler.php';

class CsvRender extends OutputHandler implements Render
{
    function __construct($coordinates)
    {
        parent::__construct($coordinates);
    }

    public function getHeader()
    {
        $header = "";
        return $header;
    }

    public function getBody()
    {
        $openTable = "";
        $closeTable = "";
        $openColumn = "";
        $closeColumn = "\n";
        $rowSeparate = ",";

        $body = $this->getTable($openTable, $closeTable, $openColumn, $closeColumn, $rowSeparate);

        return $body;
    }

    public function getFooter()
    {
        $footer = "";
        return $footer;
    }

    public function getRendering()
    {
        $fp = fopen("php://output", "w");

        $header =  $this->getHeader();
        $body =  $this->getBody();
        $footer =  $this->getFooter();
        
        fwrite($fp, $header);
        fwrite($fp, $body);
        fwrite($fp, $footer);
    }
}