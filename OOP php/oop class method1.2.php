<?php
class  Person{
  public $name;
  public $age;

  public function personName(){
    echo "person Name is :".$this->name."<br/>";


  }
  public function personAge($value){
    echo "person Age is:".$this->age=$value;

  }
}

$personOne = new Person;
 $personOne->name="Sumon";
 $personOne->personName();

 $personOne->personAge("26");






 ?>
