<?php

require_once (__DIR__ . '/userprofile.php');


// Array Utenti Blog
$array_users = [

  [
    'name'=>'Mario',
    'surname'=>'Rossi',
    'age'=>'30',
    'email'=>'mrossi@mail.it',
    'password'=>'123',
  ],

  [
    'name'=>'Sara',
    'surname'=>'Bianchi',
    'age'=>'32',
    'email'=>'sara@mail.it',
    'password'=>'456',
  ],

  [
    'name'=>'Matteo',
    'surname'=>'Neri',
    'age'=>'18',
    'email'=>'matteo@mail.it',
    'password'=>'789',
  ],

];


// Ciclo ForEach 
//    --> stampa dati $array_users in html
foreach ($array_users as $user) {
  $user = new UserProfile ($user['name'], $user['surname'], $user['age'], $user['email'], $user['password']);
  $user_data = $user->getUserData();


  ?>
		<div>
			<ul>
      <li>Nome: <?php echo $user_data['name']; ?></li>
      <li>Cognome: <?php echo $user_data['surname']; ?></li>
      <li>Età: <?php echo $user_data['age']; ?></li>
      <li>Email: <?php echo $user_data['email']; ?></li>
			</ul>
		</div>
	<?php

  
}


// // Creazione Oggetti/Istanze 
// //    --> create singolarmente
// $user1 = new UserProfile();
// $user1->name = 'Marco';
// $user1->surname = 'Rossi';
// $user1->age = 30;
// $user1->email = 'mrossi@gmail.com';
// $user1->password = 12345;
// $user1->setLoginStatus(false);
// $login=$user1->getLoginStatus();
// var_dump($user1);


// $user2 = new UserProfile();
// $user2->name = 'Sara';
// $user2->surname = 'Bianchi';
// $user2->age = 25;
// $user2->email = 'sara@libero.it';
// $user2->password = 67890;
// $user2->setLoginStatus(true);
// $login=$user2->getLoginStatus();
// var_dump($user2);


?>

