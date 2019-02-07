<?php

require "personnage.php";
require "weapon.php";
require "equipement.php";
require "terroriste.php";
require "antiterro.php";
require "bomb.php";


//arsenal nil nlul nul les commentaires !!!@@@@@@@@@@@@@@@@@@@@@@@@

$bazooka = new Weapon("bazooka", 10, 10, 1);
$pistolet = new Weapon("pistolet", 2, 67, 5);
$mickael = new Terroriste("Micka" , "homme", 60);
$melec = new Antiterro("Melec" , "homme", 100);

$micaName = $mickael -> getName();
$micaHp = $mickael -> getHealthPoint();


$melecName = $melec -> getName();
$melecHp = $melec -> getHealthPoint();

$bazooka = new Weapon("bazooka", 10, 10, 1);
$pistolet = new Weapon("pistolet", 2, 67, 5);

$mickael -> setWeapon($bazooka);
$melec -> setWeapon($pistolet);

$kevlar = new Equipement("kevlar" , 5, 5);
$helmet = new Equipement("helmet" , 5, 2);

$mickael -> setEquipement($kevlar);
$melec -> setEquipement($helmet);

$micaEquipement = $mickael -> getEquipement() -> getName();

$melecEquipement = $melec -> getEquipement() -> getName();




?>   

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class= "flex">
        <div class="divTerro">
            <button onclick="createTerrorist()" id="buttonTerro">Creation du terroriste micael</button>
            <div id="terro">En attente du terroriste</div>
            <div onclick="setWeaponTerro()" id="setWeaponTerro">En attente de création du terroriste</div>
            <div onclick="setEquipementTerro()" id=setEquipementTerro></div>
        </div>
                                                                                                                         
        <div class="divAnti">
            <button onclick="createAntiTerrorist()" id="buttonAnti">Creation de l'antiterroriste melec</button>
            <div id="antiterro">En attente de l'antiterroriste</div>
            <div onclick="setWeaponAnti()" id="setWeaponAntiTerro">En attente de création de l'antiterroriste</div>
            <div onclick="setEquipementAnti()" id=setEquipementAnti></div>
        </div>
    </div>
    
    
</body>
<script>
    let micaHp = <?php echo $micaHp ?>;
    var micaName = "<?php echo $micaName ?>"

  

    let melecHp = <?php echo $melecHp ?>;
    let melecName = "<?php echo $melecName ?>"

    

    function createAntiTerrorist(){
        
        document.getElementById("antiterro").innerHTML = melecName + " l' antiterroriste à " + melecHp + " hp" ;
        document.getElementById("setWeaponAntiTerro").innerHTML = "Choix de l'arme" ;
    }
    function createTerrorist(){
        document.getElementById("terro").innerHTML = micaName + " le terroriste à " + micaHp + " hp" ;
        document.getElementById("setWeaponTerro").innerHTML = "Choix de l'arme" ;

    } 
    function setWeaponAnti(){
        document.getElementById("setWeaponAntiTerro").innerHTML = "Vous avez un Pistolet";
        document.getElementById("setEquipementAnti").innerHTML = "Prenez votre équipement"
    }
    function setWeaponTerro(){
        document.getElementById("setWeaponTerro").innerHTML = "Vous avez un Bazooka";
        document.getElementById("setEquipementTerro").innerHTML = "Prenez votre équipement"
    }

    function setEquipementTerro(){
        document.getElementById("setEquipementTerro").innerHTML = "Vous avez un gilet en kevlar";
    }

       function setEquipementAnti(){
        document.getElementById("setEquipementAnti").innerHTML = "Vous avez un casque";
    }

</script>
</html>




