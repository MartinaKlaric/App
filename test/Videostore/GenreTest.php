<?php

namespace App\Test\Videostore;
use PHPUnit\Framework\TestCase;
use App\Videostore\Genre;

class GenreTest extends TestCase   //ekstenda TestCase pa ga moram i u use staviti(linija 4)
{
    public function testGetNameReturnsLowercaseName() 
    {
        $genre=new Genre('Triler'); //istanciramo novi žanr koji se zove triler

        $this->assertSame('triler', $genre->getName());
    }

    public function testGetNameIfUppercaseIsRequestReturnsUppercaseName() //najbolje je odmah napisati što metoda testira da bude
                                                                         //preglednije kad imamo više testova da znamo koji što testira
    {
        $genre=new Genre('Triler');

        $this->assertSame('TRILER', $genre->getName(true));
    }
}
