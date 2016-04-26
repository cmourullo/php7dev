<?php

/**
 * Class OutputHandler: this class generate the coordinates table using the delimiters that we want to use
 * depending on the output format that we choose.
 */
class OutputHandler
{
    /**
     * @var
     */
    private $coordinates;

    /**
     * OutputHandler constructor.
     * @param $coordinates
     */
    function __construct($coordinates)
    {
        foreach ($coordinates as $coordinate) {
            $preparedCoordinate["latitude"] = $coordinate[0];
            $preparedCoordinate["longitude"] = $coordinate[1];

            $this->coordinates[] = $preparedCoordinate;
        }
    }

    /**
     * @param $openTable
     * @param $closeTable
     * @param $openColumn
     * @param $closeColumn
     * @param $rowSeparate
     * @return string
     */
    public function getTable($openTable, $closeTable, $openColumn, $closeColumn, $rowSeparate)
    {
        $table = $openTable;

        foreach ($this->coordinates as $coordinate) {
            $table .= $openColumn;
            $table .= $coordinate["latitude"];
            $table .= $rowSeparate;
            $table .= $coordinate["longitude"];
            $table .= $closeColumn;
        }

        $table .= $closeTable;

        return $table;
    }

}