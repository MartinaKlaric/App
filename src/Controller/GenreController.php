<?php

namespace App\Controller;
use App\Model\Genre;

class GenreController
{
    public function index()  //ova metoda bit će zadužena za vraćanje žanrova
    {
        $genre = new Genre(); //istanciram novu klasu Genre (pozivam model) i spremam ju u varijablu $genre
        $genres = $genre->findAll(); //iz nova klase Genre istancirane na liniji iznad pozivam funkciju findAll
                                     //i spremam to u varijablu $genres i ...
       
        return $genres; //...vraćam to kao odgovor                              
    }
      
}