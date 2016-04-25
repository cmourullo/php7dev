<?php
require_once 'library/Render.php';

class CsvRender implements Render
{
    private $coordinates;

    function __construct($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    public function getHeader()
    {
        return false;
    }

    public function getBody()
    {
        $body =  '';
        
        foreach ($this->coordinates as $coordinate) {
            $body .= "{$coordinate[0]},{$coordinate[1]}\n"; 
        }

        return $body;
    }

    public function getFooter()
    {
        return false;
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