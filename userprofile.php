<?php

// Creazione Classe
class UserProfile {
  public $name;
  public $surname;
  public $age;
  public $email;
  public $password;
  public $login = false;


  // Construct
  public function __construct($_name, $_surname, $_age, $_email, $_password) {
		$this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
		$this->email = $_email;
		$this->password = $_password;
  }
  

  public function getUserData() {
		return [
			'name' => $this->name,
      'surname' => $this->surname,
      'age' => $this->age,
			'email' => $this->email,
		];
	}


  public function setLoginStatus($login) {
    $this->login = $login;
  } 

  // public function setLoginStatus($login)
  // {
  //   if ($login === true) {
  //     echo 'Welcome';
  //   }
  //   else {
  //     echo 'Access denied.';
  //   }
  // }

  public function getLoginStatus()
  {
    return $this->login;
  }


  
}

?>