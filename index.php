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

?>


    

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class= "flex">
        <div>
            <button onclick="createTerrorist()" id="button">Creation du terroriste micael</button>
            <div id="terro">En attente du terroriste</div>
        </div>

        <div>
            <button onclick="createAntiTerrorist()" id="button">Creation du terroriste micael</button>
            <div id="antiterro">En attente de l'antiterroriste</div>
        </div>
    </div>
    
    
</body>
<script>
    console.log("hbjnj");
    let micaHp = <?php echo $micaHp ?>;
    var micaName = "<?php echo $micaName ?>"

    let melecHp = <?php echo $melecHp ?>;
    let melecName = "<?php echo $melecName ?>"

    function createAntiTerrorist(){
        document.getElementById("antiterro").innerHTML = melecName + " l' antiterroriste à " + melecHp + " hp" ;
    }
    function createTerrorist(){
        document.getElementById("terro").innerHTML = micaName + " le terroriste à " + micaHp + " hp" ;
        

        console.log("hbjnj");
    } 
//document.getElementById("button").addEventListener("click", afterClick());
</script>
</html>




