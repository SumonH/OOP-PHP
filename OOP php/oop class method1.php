<?php
class  Person{
  public $name;
  public $age;

  public function personName(){
    echo "person Name is :".$this->name;


  }
  public function personAge(){

  }
} 

$personOne = new Person;
 $personOne->name="Sumon";
 $personOne->personName();






 ?>
