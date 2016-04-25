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
        $body .=  '<table>';
        
        $body .= $this->getTable();
        
        $body .= '</table>';
        $body .= '</body>';

        return $body;
    }

     public function getFooter()
    {
        $footer = '</html>';
        return $footer;
    }

    public function getRenderization()
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