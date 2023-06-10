<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;
use Iterator;
use App\Math\Geometry\Observer\ShapeObserver;
use SplSubject;      //DOBRO PAZITI DA SVE OVE USE DODAM JER INAČE NEĆE RADITI!
use SplObserver;
use SplObjectStorage;

class Notebook implements Iterator, SplSubject       
{
    private static ?Notebook $instance = null;   

    private array $shapes = [];

    private int $position = 0; 

    private function __construct(private SplObjectStorage $observers = new SplObjectStorage())   
    {}

    public static function getInstance(): self 
    {
        if(self::$instance === null){                   
            self::$instance = new Notebook();           
        }

        return self::$instance;
    }

    public function addDrawableShape(Drawable $shape): self
    {
        $this->shapes[] = $shape;
        $this->notify(); //svaki put kad se pojavi novi shape, prije nego odemo na return $this, obavijestit 
                         //ćemo sve pretplatnike (observere) o toj promjeni
        return $this;
    }

    public function getDrawing(): string
    {
        $drawing = '';

        foreach ($this->shapes as $shape) {
            $drawing .= ' ' . $shape->draw();
        }

        return $drawing;
    }

    public function current(): mixed
    {
       return $this->shapes[$this->position]; //vraćam prvi element iz niza shapes
    }

    public function next(): void 
    {
       $this->position++; //prelazimo na idući element (povećam poziciju za 1)
    }

    public function key(): mixed
    {
       return $this->position; //kažem da je pozicija key
    }

    public function valid(): bool   //kad odemo sa next na sljedeći element, ova funkcija provjerava je li
                                   //taj element stvarno element ili smo završili s iteracijom
    {
       return isset($this->shapes[$this->position]); //vraća true ili false (vidim po ovom bool na 68) ovisno postoji li element ili smo gotovi
    }

    public function rewind(): void
    {
       $this->position = 0; //vraćamo se na početak
    }

    public function attach(SplObserver $observer): void 
    {
        $this->observers->attach($observer); //iz observera svih koji su u storageu (na liniji 16 sam ih kreirala) uzmi observera i 
    }                                        //attachaj ga nek prima obavijesti (drugim riječima prijavim objekt iz storagea)

    public function detach(SplObserver $observer): void 
    {
        $this->observers->detach($observer); //odjavim objekt iz storagea
    }

    public function notify(): void      //moram ići po svim observerima koji su u storageu i obavijestiti svaki od njih o promjenama
    {                                   //pa zato koristim foreach petlju
        foreach ($this->observers as $observer)
        {
            $observer->update($this); //metodi update koja će mi koristiti u fileu ShapeObserver proslijedim cijeli notebook
        }
    }
}