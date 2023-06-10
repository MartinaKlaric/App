<?php

namespace App\Math\Geometry\Observer;
use SplObserver;
use SplSubject;

class LoggingShapeObserver implements SplObserver
{
    public function update(SplSubject $subject): void 
    {
        echo "[LOG]: Dodan novi geometrijski lik u biljeznicu!\n";
    }
}