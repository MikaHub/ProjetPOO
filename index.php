<?php

require "personnage.php";
require "weapon.php";

//arsenal


$bazooka = new Weapon("bazooka", 5, 3, 1);
$pistolet = new Weapon("pistolet", 3, 12, 6);

 
echo "Name: " . $pistolet -> getName() . " damage: " . $pistolet -> getDamage() . "<br>";

echo $bazooka -> getName() . "<br>";

echo $pistolet -> getName() . "<br>";
echo $bazooka -> getMunition();


$mickael = new Personnage("micka" , "homme", 30);


$melec = new Personnage("melec" , "homme", 30);

//echo $mickael -> getName() . " a été créé<br>Il a " . $mickael -> getHealthPoint() . " hp et c'est un " . $mickael -> getGender();
//echo $mickael -> getName() . " a été créé<br>Il a " . $mickael -> getHealthPoint() . " hp et c'est un " . $mickael -> getGender();

$mickael -> showPersonnage();
echo("<br>");
$melec -> showPersonnage();

echo("<br>");
$mickael -> setWeapon($bazooka);
$melec -> setWeapon($pistolet);
echo $mickael -> getWeapon() -> getName() . "<br><br>";

//echo $mickael -> getWeapon() -> getDamage();

//$mickael -> shootEnnemy($melec);
$turn = 0;


while(($melec -> getHealthPoint() > 0 ) && ($mickael -> getHealthPoint() > 0 )){
    if($turn == 0){
        echo "Melec attaque <br>";
        $melec -> shootEnnemy($mickael);
        $turn = 1;
    }
    else{
        echo "micka attaque <br>";
        $mickael -> shootEnnemy($melec);
        $turn = 0;
    }
    
    
}

