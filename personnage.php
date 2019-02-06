<?php

class Personnage{
    private $_name;
    private $_gender;
    private $_weapon;
    private $_health_point;
    private $_equipement;
    private $_ammo_stock;

    public function __construct(string $name, string $gender, $health_point){
        $this->setName($name);
        $this->setGender($gender);
        $this->setHealthPoint($health_point);
    }

    private function setName($name){
        $this -> _name = $name;
    }
    private function setGender($gender){
        $this -> _gender = $gender;
    }
    public function setHealthPoint($_health_point) {
        $this -> _health_point = $_health_point;
    }
    public function setWeapon($weapon){
        $this -> _weapon = $weapon;
    }
    public function setEquipement($equipement){
        $this -> _equipement = $equipement;
    }
    public function setAmmoStock($ammoStock){
        $this -> _ammo_stock = $ammoStock;
    }

    public function reduceAmmoStock($weapon, $value){
        $this -> _ammo_stock[$weapon] -= $value;
    }

    //setWeapon

    public function getName(){
        return $this -> _name;
    }
    public function getGender(){
        return $this -> _gender;
    }
    public function getHealthPoint(){
        return $this -> _health_point;
    }

    public function getWeapon(){
        return $this -> _weapon;
    }
    public function getEquipement(){
        return $this -> _equipement;
    }
    public function getAmmoStock($arme){
        return $this->_ammo_stock[$arme];
    }


    public function showPersonnage(){
        echo $this-> getName() . " a été créé<br>Il a " . $this -> getHealthPoint() . " hp et c'est un " . $this -> getGender() . "<br>";
    }

    //getWeapon
    public function shootEnnemy(personnage $ennemy){
        $random = rand(0, 5);
        /*if(perso possede point armure > O){
            alors on fait (hp -= (attak - point armure)) (hp + armure) - attak
        }else */

        $damageReal = (($this-> getWeapon()-> getDamage())*$random) ;
        
        $damageArmor = $damageReal - ($this -> getEquipement() -> getArmor());

        $getWeapon = $this-> getWeapon();
       

        echo "dégats reels: " . $damageReal . "<br>";
        echo "armure: " . $this -> getEquipement() -> getArmor() . "<br>";
        echo "dégats armor: " . $damageArmor . "<br>";

        if($damageArmor < 0){
            echo "L'amure fonctionne 0 dégats<br>";
        }
        else{
            $ennemy -> setHealthPoint($ennemy-> getHealthPoint() - $damageReal);

            echo $ennemy -> getName() . " à perdu de la vie, vie restante: " . $ennemy -> getHealthPoint() . "<br>";
        }
       // $ennemy -> setHealthPoint($ennemy-> getHealthPoint() - $damageReal);
        
        

        //echo "capacité de l'arme: " . $this -> getWeapon() -> getCapacity() . "<br>";

        echo "L'arme a " . $this -> getWeapon() -> getMunition() . "munitions<br>";

        $this -> getWeapon() -> setMunition(($this -> getWeapon() -> getMunition()) - $this -> getWeapon() -> getCapacity());

        echo "il reste " . $this -> getWeapon() -> getMunition() . "munitions<br>";

    }

    public function reload ($NB_chargeur){
        echo "melec recharge de " . $NB_chargeur * $this -> getWeapon() -> getCapacity() . "<br>" ;
        
        $this -> getWeapon() -> setMunition($this -> getWeapon() -> getCapacity());
        
        echo "melec" . $this -> getWeapon() -> getMunition() . " <br> ";
        
        echo "ammostock" . $this -> getAmmoStock($this -> getWeapon() -> getName()) . "<br>";

        $this -> reduceAmmoStock('pistolet', 1);
        
        echo "<br>vardumpt: " . $this -> _ammo_stock['pistolet'] . " fin<br>";
    
        echo "ammostock apres rechargement" . $this -> getAmmoStock($this -> getWeapon() -> getName()) . "<br>";

        echo "munition dans l'arme " . $this -> getWeapon() -> getMunition() . "<br>";
    }
}
