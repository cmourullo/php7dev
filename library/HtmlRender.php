<?php
require_once 'library/Render.php';

class HtmlRender implements Render
{
    private $coordinates;

    function __construct($coordinates)
    {
        $this->coordinates = $coordinates;
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
        
        foreach ($this->coordinates as $coordinate) {
            $body .= '<tr>';
            $body .= "<td>{$coordinate[0]}</td><td>{$coordinate[1]}</td>"; 
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