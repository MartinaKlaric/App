<?php

namespace App\Math\Geometry\Observer;
use SplObserver;
use SplSubject;

class ShapeObserver implements SplObserver
{
    public function update(SplSubject $subject): void //na kraju filea Notebook.php u foreachu koristim update i tamo 
    {                                                 //sam metodi update proslijedila cijeli notebook
        echo "Dodan novi geometrijski lik u biljeznicu!", "\n";
    }
}