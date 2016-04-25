<?php
require_once 'library/Render.php';
require_once 'library/OutputHandler.php';

class HtmlRender extends OutputHandler implements Render
{
    function __construct($coordinates)
    {
        parent::__construct($coordinates);
    }

    public function getHeader()
    {
        $header = '<html><head></head>';
        return $header;
    }

    public function getBody()
    {
        $body =  '<body>';
        $openTable = '<table>';
        $closeTable = '</table>';
        $openColumn = '<tr><td>';
        $closeColumn = '</tr></td>';
        $rowSeparate = '</td><td>';

        $body .= $this->getTable($openTable, $closeTable, $openColumn, $closeColumn, $rowSeparate);
        $body .= '</body>';

        return $body;
    }

     public function getFooter()
    {
        $footer = '</html>';
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