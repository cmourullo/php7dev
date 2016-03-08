<?php
require_once 'src/Boxes.php';

class BoxesTest extends PHPUnit_Framework_TestCase
{
    public function testNoBoxes()
    {
        $this->assertEquals(-1, Boxes::minimalNumberOfBoxes(1, 0, 0));
    }

}

