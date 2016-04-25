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

    public function getTable($openTable, $closeTable, $openColumn, $closeColumn, $rowSeparate)
    {
        $coordinates = $this->getCoordinates();

        $table = $openTable;

        foreach ($coordinates as $coordinate) {
            $table .= $openColumn;
            $table .= $coordinate['latitude'];
            $table .= $rowSeparate;
            $table .= $coordinate['longitude'];
            $table .= $closeColumn;
        }

        $table .= $closeTable;

        return $table;
    }

}