<?php


/*
    4. Пример реализации одиночки
*/
<?php

class Singleton {

  private static $instance = null;

  private function __construct()
  {
  // some logic
  }


  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }
   public function test()
      {
          var_dump($this);
      }
}

$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();
$object3 = Singleton::getInstance();

$test1 = $object1->test();
$test2 = $object2->test();
$test3 = $object3->test();
