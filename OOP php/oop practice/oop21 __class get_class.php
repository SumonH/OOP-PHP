<?php

spl_autoload_register(function($class_name){
  include "get_class/".$class_name.".php";

});

    class phpChild extends Php{
        public function cms(){
          echo "Child Class Constant and class name->".__CLASS__."<br>";
          echo "Child Class Function and class name->".get_class($this)."<br>";
  }



          
}

$php = new phpChild();
$php->framework();
echo "<hr/>";
$php->cms();



 ?>
