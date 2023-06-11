<?php

namespace App\Math\Geometry\Exception;

use Exception;

class RadiusException extends Exception
{
    public function __construct()
    {
        parent::__construct('Radius is invalid.', 476);
    }
}