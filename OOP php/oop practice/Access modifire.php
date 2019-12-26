
<?php

  class UserData{
    public $user;
    public $userId;
    //protected $age = "5";
    private $age = "5";

    public function __construct($userName, $userId){
      $this->user = $userName;
      $this->userId = $userId;
    }

    public function display(){
      echo "Username is {$this->user} and userid is {$this->userId}";
      echo "<br>";
      echo  $this->age."inside class";
    }
  }

  class Admin extends UserData{
    public $level;
    public function display(){
      echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";
      echo "<br>";
      echo  $this->age."inside class";
    }
  }

  $user = "Mamun";
  $id = "25";
  $ur = new UserData($user, $id);
  echo "<br>";
  $ur->display();
  echo "<br>";
  $user = "Admin";
  $id = "1";
  $ad = new Admin($user,$id);
  $ad->level= "Adminstrator";
  $ad->display();

 ?>
