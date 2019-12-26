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
trait JavaPhp{
  use Java,Php;
}
class CoderOne{
use JavaPhp;
}
$c1 = new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();




 ?>
