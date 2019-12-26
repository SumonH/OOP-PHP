<?php

  spl_autoload_register(function($class_name){
    include "serialization/".$class_name.".php";
  });

  $pro = new Programmin();
  $ser = serialize($pro);
  // file_put_contents("Programmin.text",$ser);
  // echo $ser;
  $getcont = file_get_contents("Programmin.text");
  $unser = unserialize($getcont);
  echo "<pre>";
  print_r($unser);
  echo "<pre>";

 ?>
