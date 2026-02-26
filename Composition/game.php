<?php

require_once 'Character.php';
require_once 'Weapon.php';

$character = new Character("Ragnar");

$sword = new Weapon("Sword", 10);

$character->setWeapon($sword);

echo "Nom du personnage : " . $character->getName() . "<br>";
echo "Arme : " . $character->getWeapon()->getName() . "<br>";
echo "Dégâts : " . $character->getWeapon()->getDamages() . "<br><br>";

echo $character->fight();

?>