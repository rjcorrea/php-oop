<?php

namespace App\Solid\OpenClosed\AreaCalculation;

use App\Solid\OpenClosed\AreaCalculation\ShapeInterface;

class Square implements ShapeInterface
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}
