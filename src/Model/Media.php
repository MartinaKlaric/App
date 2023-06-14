<?php

namespace App\Model;
use Core\Model;

class Media extends Model
{
    public function getClassName(): string 
    {
        return self::class;
    }

    public function getTable(): string
    {
        return 'medij';
    }

}