<?php

namespace App\Solid\OpenClosed\AreaCalculation;

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
