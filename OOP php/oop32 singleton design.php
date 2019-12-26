<?php

spl_autoload_register(function($class_name){
  include "singleton de_pa/".$class_name.".php";
});

new Database();
new Database();
new Database();
new Database();
new Database();

 ?>
