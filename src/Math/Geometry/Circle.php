<?php

namespace App\Math\Geometry;

use App\Math\Constants as Konstante;
use App\Math\Geometry\Exception\RadiusException;
use App\Math\Geometry\Interface\Drawable;


class Circle implements Drawable
{
    public function __construct(private int $radius)
    {
        if ($this->radius <= 0) {
            throw new RadiusException();
        }
    }

    public function getExtent(): int
    {
        return 2 * $this->radius * Konstante::PI;
    }

    
    public function draw(): string
    {
        return '○';
    }
}