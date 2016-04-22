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
        ob_start();
        echo '<body>';
        echo '<table>';
        foreach ($this->coordinates as $coordinate) {
            echo '<tr>';
            echo "<td>{$coordinate[0]}</td><td>{$coordinate[1]}</td>";
            echo '</tr>';
        }
        echo '</table>';
        echo '</body>';

        $body = ob_get_contents();
        ob_end_clean();
        return $body;
    }

    public function renderCoordinates()
    {
        echo $this->getHeader();
        echo $this->getBody();
        echo $this->getFooter();

    }
}