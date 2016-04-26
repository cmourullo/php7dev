<?php
require_once 'library/Render.php';
require_once 'library/OutputHandler.php';

/**
 * Class CsvRender to render the coordinates using HTML output
 */
class HtmlRender extends OutputHandler implements Render
{
    /**
     * HtmlRender constructor.
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
        $header = "<html><head></head>";
        return $header;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        $body =  "<body>";
        $openTable = "<table>";
        $closeTable = "</table>";
        $openColumn = "<tr><td>";
        $closeColumn = "</tr></td>";
        $rowSeparate = "</td><td>";

        $body .= $this->getTable($openTable, $closeTable, $openColumn, $closeColumn, $rowSeparate);
        $body .= "</body>";

        return $body;
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        $footer = "</html>";
        return $footer;
    }

    /**
     * Main function to render the coordinates using HTML output
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