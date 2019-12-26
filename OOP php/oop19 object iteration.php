<?php

spl_autoload_register(function($class_name){
  include "iteration/".$class_name.".php";

});

$person = new Person;
foreach ($person as $key => $value){
  echo "<pre>";
  echo "$key=> $value";
  echo "</pre>";
}
$person->iteratorInner();

 ?>
