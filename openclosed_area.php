<?php

require 'vendor/autoload.php';

use App\Solid\OpenClosed\AreaCalculation\AreaCalculator;
use App\Solid\OpenClosed\AreaCalculation\Circle;
use App\Solid\OpenClosed\AreaCalculation\Square;


$square = new Square(2, 4);
echo 'Area Square: ' . $square->area();

echo "<br>";

$circle = new Circle(21);
echo 'Area Circle: ' . $circle->area();

$shapes = [
    $square
];

echo "<br>";

$area = new AreaCalculator;
echo 'Total Area: ' . $area->calculate($shapes);
