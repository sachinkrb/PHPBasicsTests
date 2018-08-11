<?php
class User {
    public $name, $password;
    function save_user()
    {
      echo "this is a test" .$this->name .$this->password;

    }
}
$user1 = new User();
$user1->name= "Tdis Budi";
$user1->password="paakhey";
 echo $user1->save_user();
