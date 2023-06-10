<?php

namespace App\Math\Geometry;

class ShapeFactory
{
    public function createCircle(int $radius): Circle
    {
        return new Circle($radius);
    }

    public function createTriangle(
        int $firstSide, int $secondSide, int $thirdSide): Triangle
    {
        return new Triangle($firstSide, $secondSide, $thirdSide);
    }
}