<?php

namespace App\Controller;

class GenreController
{
    public function index()  //ova metoda bit će zadužena za vraćanje žanrova
    {
        return [                   //za sada vraćamo samo hardkodirano (nikakva logika, samo napišemo što da vrati)
            ['name'=>'Horor'], 
            ['name'=>'Komedija'],
            ['name'=>'Triler'],
            ['name'=>'Drama']
        ];
    }
}