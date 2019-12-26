<?php

spl_autoload_register(function($class_name){
  include "hinting/".$class_name.".php";
});

$cal = new Calculation;

$nums = array(
    array('Number One',10,10),
    array('Number Two',20,20)
);


$cal->getValue($nums);

 ?>
