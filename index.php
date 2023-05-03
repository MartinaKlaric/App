<?php

interface Vehicle
{
   public function start():void;
   public function stop():void;
}

abstract class Car
{
   public function __construct(protected int $tankCapacity){}
   abstract function getKmOnFullTank():int;
}


class Kia extends Car implements Vehicle
{
   public function getKmOnFullTank():int
   {
      return $this->tankCapacity*18;
   }
   public function start(): void
   {
      echo "Kia has started.\n";
   }
   public function stop(): void
   {
      echo "Kia has stopped.\n";
   }
}

class Audi extends Car implements Vehicle
{
   public function getKmOnFullTank():int
   {
      return $this->tankCapacity*20;
   }
   public function start(): void
   {
      echo "Audi has started.\n";
   }
   public function stop(): void
   {
      echo "Audi has stopped.\n";
   }
}

class Avion implements Vehicle
{
   public function start(): void
   {
      echo "Avion has started.\n";
   }
   public function stop(): void
   {
      echo "Avion has stopped.\n";
   }
}



   