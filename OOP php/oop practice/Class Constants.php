 <?php

  class UserData{

    public $num;

    const NAME = "Sumon hasan";

    public function display(){
      echo "Full name is: ".UserData::NAME;
    }
  }

  $ur = new UserData();
  $ur->display();

 ?>
