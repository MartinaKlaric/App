<?php

namespace App\Math\Geometry;
use App\Math\Geometry\Interface\Drawable;

class Triangle implements Drawable
{
    public function __construct(
        private int $firstSide, private int $secondSide, private int $thirdSide
        )               //dodajem prvu, drugu i treću stranicu trokuta -> to će primati funkcija
                        //da bi istancirala trokut trebaš mi dati 3 stranice
    {}

    public function draw(): string
    {
        return '▲';
    }
}