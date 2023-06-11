<?php

namespace App\Test\Math\Geometry;

use PHPUnit\Framework\TestCase;
use App\Math\Geometry\Circle;
use App\Math\Geometry\Exception\RadiusException;

class CircleTest extends TestCase
{
   public function testDrawReturnsCircleDrawing()
   {
      $circle = new Circle(10);

      $this->assertSame('○', $circle->draw()); //kažemo u zagradi što bi trebalo biti vraćeno i pozovemo metodu koju testiramo
   }

    /**
    *  @dataProvider getRadiusWithExpectedExtent
    */
   public function testGetExtentReturnExpectedResult(int $radius, float $expectedExtent)
   {
      $circle = new Circle($radius);

      $this->assertSame($expectedExtent, $circle->getExtent()); //opet kažem u zagradi prvo očekivani rezultat, a onda pozovem metodu
   }


   public static function getRadiusWithExpectedExtent() 
   {
       return [[10, 2*10*3.14], [100, 2*100*3.14]];
   }


   /**
    * @dataProvider getInvalidRadiuses
    */
   public function testCreatingACircleWillThrowExceptionIfRadiusIsInvalid(int $radius)
   {
      $this->expectException(RadiusException::class); 
      $this->expectExceptionMessage('Radius is invalid.');
      $this->expectExceptionCode(476);

      new Circle($radius);                                
   }

   public static function getInvalidRadiuses()
   {
      return[
         [-10],
         [0],
         [-30]
      ];
   }
}