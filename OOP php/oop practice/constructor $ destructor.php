<?php

class UserData{
  public $user;
  public $userId;
  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;
    echo "Username is {$this->user} and userid is {$this->userId}";

  }
  public function __destruct(){
    unset($this->user);
    unset($this->userId);
  }
}
$user = "Mamun";
$id = "23";
$ur = new UserData($user, $id);

 ?>
