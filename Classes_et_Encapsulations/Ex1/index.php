<?php

require_once 'User.php';

$user1 = new User(1, "admin", "admin");
$user2 = new User(2, "user", "user");

echo "Utilisateur 1 :<br>";
echo "ID : " . $user1->getId() . "<br>";
echo "Username : " . $user1->getUsername() . "<br>";
echo "Password : " . $user1->getPassword() . "<br><br>";

echo "Utilisateur 2 :<br>";
echo "ID : " . $user2->getId() . "<br>";
echo "Username : " . $user2->getUsername() . "<br>";
echo "Password : " . $user2->getPassword() . "<br>";

?>