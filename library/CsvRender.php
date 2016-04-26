<?php
require_once 'library/Render.php';
require_once 'library/OutputHandler.php';

/**
 * Class CsvRender to render the coordinates using CSV output
 */
class CsvRender extends OutputHandler implements Render
{
    /**
     * CsvRender constructor.
     * @param $coordinates
     */
    function __construct($coordinates)
    {
        parent::__construct($coordinates);
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        $header = "";
        return $header;
    }

    /**
     * @return string
     */
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

    /**
     * @return string
     */
    public function getFooter()
    {
        $footer = "";
        return $footer;
    }

    /**
     * Main function to render the coordinates using CSV output
     */
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