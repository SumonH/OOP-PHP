<?php
class UserData{
  public $user;
  public $userId;
  protected $age = "30";

  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;

  }

  public function display(){
    echo "Username is {$this->user} and userid is {$this->userId}";
    echo "<br>";
    echo $this->age. "Inside Class";
  }

}


class Admin extends UserData{
public $level = "Administrator";
public function display(){
  echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";
  echo "<br>";
  echo $this->age. "In the sub Class";
}


}


$user = "sumon";
$id = "23";
$ur = new UserData($user, $id);

$ur->display();

$admin = new Admin("Admin", "1");

$admin->display();

echo "<br>";

echo $ur->age;
 ?>
