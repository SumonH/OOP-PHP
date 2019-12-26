<?php

  $arr = array("HTML","CSS","PHP","JavaScript");

  $ai = new ArrayIterator($arr);
  $ci = new CachingIterator($ai);

  foreach ($ci as $value) {
  echo $value;
  if ($ci->hasNext()) {
    echo " , ";
  }
  }

 ?>
