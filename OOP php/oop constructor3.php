<?php
class  Person{
  public $name;
  public $age;

  public function __construct($name1, $age1){
    $this->name = $name1;
    $this->age = $age1;
  }

  public function personDetails(){
    echo "person name is {$this->name} and person age is{$this->age}";
  }
}
$personOne = new Person("sumon","26");
$personOne->personDetails();







 ?>
