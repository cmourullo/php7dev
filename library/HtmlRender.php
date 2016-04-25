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
        $coordinates = $this->getCoordinates();

        $body =  '<body>';
        $body .=  '<table>';
        
        foreach ($coordinates as $coordinate) {
            $body .= '<tr>';
            $body .= "<td>{$coordinate['latitude']}</td><td>{$coordinate['longitude']}</td>";
            $body .= '</tr>';
        }
        
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