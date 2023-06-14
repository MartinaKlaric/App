<?php

namespace App\Model;

use Core\Model;

class Genre extends Model
{
    public function getClassName(): string 
    {
        return self::class;
    }

    public function getTable(): string
    {
        return 'zanr';
    }
}


