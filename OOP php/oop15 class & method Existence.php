<?php

include "oop with15 student.php";

if (class_exists("Student")) {


$st = new Student();

if(method_exists($st, 'describe')){

$st->describe();

}else {
  echo "mehtod not found";
}
} else {
  echo "class not found";
}


 ?>
