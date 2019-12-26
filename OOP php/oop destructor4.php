<?php
class  Person{
            public $name;
            public $age;
            public $id;

  public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
  }

  public function setId($id){
            $this->id = $id;
  }
public function __destruct(){
    //  mysql_close();
      if(! empty($this->id)){
        echo "Saving Person";
  }
}
}

$personOne = new Person("sumon","26");
$personOne->setId(12);
unset($personOne);
