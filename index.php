<?php

require "personnage.php";
require "weapon.php";

//arsenal

$bazooka = new Weapon("bazooka", 14);

echo $bazooka -> getName();


$mickael = new Personnage("micka" , "homme", 10);





$melec = new Personnage("melec" , "homme", 12);

//echo $mickael -> getName() . " a été créé<br>Il a " . $mickael -> getHealthPoint() . " hp et c'est un " . $mickael -> getGender();
//echo $mickael -> getName() . " a été créé<br>Il a " . $mickael -> getHealthPoint() . " hp et c'est un " . $mickael -> getGender();

$mickael -> showPersonnage();
echo("<br>");
$melec -> showPersonnage();

$mickael -> setWeapon($bazooka);
echo $mickael -> getWeapon() -> getName();

//echo $mickael -> getWeapon() -> getDamage();

$mickael -> shootEnnemy($melec);