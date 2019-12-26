<?php

  class Person{
    public $name;
    public $age;
    public $id;

    public function __construct($name1,$age1){
      $this->name = $name1;
      $this->age = $age1;

    }
    public function setId($id1){
      $this->id=$id1;

    }
    public function __destruct(){
      mysql_close();
      // if (!empty($this->id)) {
      //   echo "Saving person";
      }

    }

   $personOne = new Person("sumon",26);
   $personOne->setId(12);
   unset ($personOne);


 ?>
