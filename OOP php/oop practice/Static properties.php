<?php
 class UserData{
   public static $age = "30";


 public function display(){
   echo "Age is :".self::$age;
 }
  }

 $ur = new UserData();
 $ur->display();

 ?>
