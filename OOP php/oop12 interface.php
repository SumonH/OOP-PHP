<?php
interface School{
  public function mySchool();
}

interface College{
  public function myCollege();
}

interface Varsity{
  public function myVarsity();
}



class Teacher implements  School,College,Varsity{


  public function __construct(){
    $this->mySchool();
    $this->myCollege();
    $this->myVarsity();
  }
  public function mySchool(){
    echo "I am a  school teacher. <br/>";
  }

  public function myCollege(){
    echo "I am a  college teacher.<br/> ";
  }

  public function myVarsity(){
    echo "I am a  varsity teacher.<br/>  ";
  }
}

class Student implements  School,College,Varsity{


  public function __construct(){
    $this->mySchool();
    $this->myCollege();
    $this->myVarsity();
  }
  public function mySchool(){
    echo "I am a  school Student. <br/>";
  }

  public function myCollege(){
    echo "I am a  college Student.<br/> ";
  }

  public function myVarsity(){
    echo "I am a  varsity Student. ";
  }
}

$teacher = new Teacher();
$student = new student();

 ?>
