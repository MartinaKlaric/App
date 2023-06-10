<?php

namespace App\Videostore;

class Genre 
{
     public function __construct(private string $Naziv) 
     {}

     public function getName($isUpperCaseRequest=false): string 
     {
        if ($isUpperCaseRequest){
              return strtoupper($this->Naziv);
        }

        return strtolower($this->Naziv); 
     }   
}


