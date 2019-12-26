<?php


/* include "classes/Ruby.php";
 include "classes/Java.php";
 include "classes/Php.php"; */

/* it is kindoff system autolod

function __autoload($class_name){
  echo "$class_name<br>";
  include "classes/".$class_name.".php";
} */

// another autoload system

spl_autoload_register(function($class_name){
  include "classes/".$class_name.".php";

});



$ruby = new Ruby;
$java = new Java;
$php = new Php;


 ?>
