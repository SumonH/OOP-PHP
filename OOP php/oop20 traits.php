<?php

trait Java{
  public function javaCoder(){
    return "I love Java<br>";
  }
}
trait Php{
  public function phpCoder(){
    return "I love PHP<br>";
  }
}
class CoderOne{
 use Java;
}
class CoderTwo{
  use Java;
}
$c1 = new CoderOne;
echo $c1->javaCoder();
$c2 = new CoderTwo;
echo $c2->javaCoder();



 ?>
