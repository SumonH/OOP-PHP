<?php

spl_autoload_register(function($class_name){
  include "hinting/".$class_name.".php";
});

$php = new Php;
new Java ($php);

 ?>
