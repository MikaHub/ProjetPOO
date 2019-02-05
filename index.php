<?php

require "personnage.php";
require "weapon.php";
require "equipement.php";

//arsenal


$bazooka = new Weapon("bazooka", 5, 3, 1);
$pistolet = new Weapon("pistolet", 3, 12, 6);
$mickael = new Personnage("Micka" , "homme", 30);
$melec = new Personnage("Melec" , "homme", 30);
$kevlar = new equipement("kevlar" , 10, 5);
$helmet = new equipement("helmet" , 5, 2);

echo " Liste des armes : <br>" . $bazooka -> getName() . " qui inflige  :  " .  $bazooka -> getDamage() . " de dégats <br> " . $pistolet -> getName() . " qui inflige  :  " .  $pistolet -> getDamage() . " de dégats <br><br> ";

echo " Joueurs : <br>" . $mickael -> getName() . "<br>" . $melec -> getName() . "<br><br>";

echo " Création de personnage : <br>";

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


// while(($melec -> getHealthPoint() > 0 ) && ($mickael -> getHealthPoint() > 0 )){
//     if($turn == 0){
//         echo "Melec attaque <br>";
//         $melec -> shootEnnemy($mickael);
//         $turn = 1;
//     }
//     else{
//         echo "micka attaque <br>";
//         $mickael -> shootEnnemy($melec);
//         $turn = 0;
//     } 
    
// }


while(($melec -> getHealthPoint() > 0 ) && ($mickael -> getHealthPoint() > 0 )){
    if($turn == 0){
        
        if($melec->getWeapon() -> getMunition() <= 0){
            echo "Melec n'a plus de balle et ne peut pas attaquer";
        }
        else{
            echo "Melec tir avec: " . $melec -> getWeapon() -> getName() . "<br>";
            $melec -> shootEnnemy($mickael);
        }
        
        $turn = 1;
    }
    else{
        
        if($mickael->getWeapon() -> getMunition() <= 0){
            echo "Mika n'a plus de balle et ne peut pas attaquer";
        }
        else{
            echo "micka attaque avec: " . $mickael -> getWeapon() -> getName() . "<br>";
            $mickael -> shootEnnemy($melec);
        }

        $turn = 0;
    }  
}
