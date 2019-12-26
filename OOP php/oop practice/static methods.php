<?php
 class UserData{
   public static $age = "30";


 public static function display(){
   echo "Age is :".self::$age;
 }
  }

 $ur = new UserData();
 UserData::display();

 ?>
