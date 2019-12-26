<?php

abstract class Student{

  public $name;
  public $age;
  public function details(){
    echo $this->name. " is " . $this->age . " years old <br>";

  }
}


class Boy extends Student{
  public function descrive(){
    return parent::details(). "And I am a high school student.<br>";
  }

  public function School(){
    return " I like to read story book.";
  }
}



$s = new Boy();
$s->name = "sumon";
$s->age = "5";
echo $s->descrive();
echo $s->School();

 ?>
