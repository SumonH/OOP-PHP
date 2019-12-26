<?php

spl_autoload_register(function($class_name){
  include "chaining/".$class_name.".php";
});

$cal = new Calculation;
echo "Result is: ". $cal->getValue(5,6)->getResult();


 ?>
