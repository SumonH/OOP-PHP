<?php

//The basis of polymorphism is Inheritance and overriden mehtods.
class UserData{
  public $user;
  public $userId;


  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;

  }

  public function display(){
    echo "Username is {$this->user} and userid is {$this->userId}";

  }

}


class Admin extends UserData{
public $level = "Administrator";
public function display(){
  echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";

}


}


$user = "sumon";
$id = "23";
$ur = new UserData($user, $id);

$ur->display();
echo "<br/>";

$admin = new Admin("Admin", "1");

$admin->display();

echo "<br>";

if ($admin instanceof UserData) {
  echo "Inherited.";
}

 ?>
