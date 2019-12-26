<?php
include "2Class & Method Existence.php";

if (class_exists("Student")) {

$st = new Student();
$st->describe();
}else {
  echo "Class not found";
}
 ?>
