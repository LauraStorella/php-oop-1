<?php

// Creazione Classe
class UserProfile {
  public $name;
  public $surname;
  public $age;
  public $email;
  public $password;
  public $login = false;

  public function getLoginStatus($login)
  {
    if ($login === true) {
      echo 'Welcome';
    }
    else {
      echo 'Access denied.';
    }
  }
}


// Creazione Oggetti/Istanze
$user1 = new UserProfile();
$user1->name = 'Marco';
$user1->surname = 'Rossi';
$user1->age = 30;
$user1->email = 'mrossi@gmail.com';
$user1->password = 12345;
$user1->login = false;
// var_dump($user1);


$user2 = new UserProfile();
$user2->name = 'Sara';
$user2->surname = 'Bianchi';
$user2->age = 25;
$user2->email = 'sara@libero.it';
$user2->password = 67890;
$user2->login = true;
// var_dump($user2);


?>