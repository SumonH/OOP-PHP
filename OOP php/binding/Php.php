<?php

class Php{

  public static function framework(){

    //echo self::getClass()."<br>";
    echo static::getClass()."<br>";
  }
  public static function getClass(){
    return __CLASS__;
  }
}

 ?>
