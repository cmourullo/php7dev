<?php

/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 25/04/2016
 * Time: 18:44
 */
class OutputHandler
{
    private $coordinates;

    function __construct($coordinates)
    {
        foreach ($coordinates as $coordinate) {
            $preparedCoordinate['latitude'] = $coordinate[0];
            $preparedCoordinate['longitude'] = $coordinate[1];

            $this->coordinates[] = $preparedCoordinate;
        }
    }

    public function getCoordinates()
    {
        return $this->coordinates;
    }

    public function getTable()
    {
        $coordinates = $this->getCoordinates();
        $table = '';

        foreach ($coordinates as $coordinate) {
            $table .= '<tr>';
            $table .= "<td>{$coordinate['latitude']}</td>";
            $table .= "<td>{$coordinate['longitude']}</td>";
            $table .= '</tr>';
        }

        return $table;
    }

}