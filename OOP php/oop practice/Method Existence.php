<?php
include "2Method Existence.php";


$st = new Student();
if (method_exists($st,'describe')) {
$st->describe();
}else {
  echo "Method not found";
}
 ?>
