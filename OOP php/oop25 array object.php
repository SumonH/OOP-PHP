<?php

  $arr = array("HTML","CSS","PHP","JavaScript");
  $coding = new ArrayObject($arr);

  $iterator = $coding->getIterator();
  while ($iterator->valid()){
    echo $iterator->current(). "<br>";
    $iterator->next();
  }
 ?>
