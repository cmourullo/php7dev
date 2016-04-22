<?php

class HtmlRender
{
    private $coordinates;

    function __construct($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    private function getHeader()
    {
        $header = '<html><head></head>';
        return $header;
    }

    private function getFooter()
    {
        $footer = '</html>';
        return $footer;
    }

    private function getBody()
    {
        $body = '';
        $body .=  '<body>';
        $body .= '<table>';
        
        foreach ($this->coordinates as $coordinate) {
            $body .= '<tr>';
            $body .= "<td>{$coordinate[0]}</td><td>{$coordinate[1]}</td>";
            $body .= '</tr>';
        }
        
        $body .= '</table>';
        $body .= '</body>';

        return $body;
    }

    public function renderCoordinates()
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