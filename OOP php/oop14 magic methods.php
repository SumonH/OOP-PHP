<?php


class Student{

  public  $name;
  public function describe(){

    echo "I am a student.<br>";
  }
  public function __get($pm){
    echo "$pm does not exist.<br>";
  }
  public function __set($pm,$value){
    echo "WE set $pm->$value<br>";

  }
  public function __call ($pm, $value){
    echo 'There is no <b>'.$pm. '</b>method and Arguments: '.implode(',',$value);

  }
}

$st = new Student();
$st->describe();
$st->hasan;
$st->age = 23;
$st->notExistMethod('2','8','5');
 ?>
