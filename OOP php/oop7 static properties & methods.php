<?php


class UserData{


  public $user;
  public $userId;

  const NAME = "Sumon hasan ali";
  public static $age = "28";

  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;
    echo "Username is {$this->user} and userid is {$this->userId}";

  }

  public static function display(){
    echo "Full name is: ".UserData::NAME."<br>";
    echo "Age is :".self::$age;
  }


  public function __destruct(){
    unset($this->user);
    unset($this->userId);

  }


}
$user = "sumon";
$id = "23";
$ur = new UserData($user, $id);

echo "<br>";
UserData::display();

 ?>
