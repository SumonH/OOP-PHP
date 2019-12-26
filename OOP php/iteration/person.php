<?php

class Person{
  public $Name = "Ariful";
  public $Age = "18";
  public $Skill = "Blogging";

  private $Email    = "sumon@gmail.com";
  protected $Password = "12345";


  function iteratorInner(){
    echo "Inside Class<br>";
    foreach ($this as $key => $value) {
      echo "<pre>";
      echo "$key=> $value";
      echo "</pre>";
    }
  }
}

 ?>
