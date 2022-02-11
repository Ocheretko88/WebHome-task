<?php

/*
    5. Пример реализации полиморфизма
*/
interface Animal
{
   public function live();
}

interface Movable
{
   public function move();
}

class LandAnimal implements Animal
{
   public function live()
   {
       return 'i can breathe in and out';
   }
}

class WaterAnimal implements Animal
{
   public function live()
   {
       return 'i can breathe underwater';
   }
}

class Fish extends WaterAnimal implements Movable
{
   public function move()
   {
       return 'i can move underwater';
   }
}
class Cat extends LandAnimal implements Movable
{
   public function move()
   {
       return 'i can run and jump';
   }
}
$fish = new Fish();
$cat = new Cat();
echo "Fish says: " . $fish->move() . " and " . $fish->live() . "." . PHP_EOL . "Cat says: " . $cat->move() . " and " . $cat->live();
// fish->live и cat->live - полиморфизм
