<?php


class Personnage{
    private $_name;
    private $_gender;
    private $_weapon;
    private $_health_point;

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


    public function showPersonnage(){
        echo $this -> getName() . " a été créé<br>Il a " . $this -> getHealthPoint() . " hp et c'est un " . $this -> getGender() . "<br>";
    }

    //getWeapon
    public function shootEnnemy(personnage $ennemy){
        $random = rand(0, 5);
        $damageReal = ($this -> getWeapon() -> getDamage()) * $random;
        $getWeapon = $this -> getWeapon();

        echo "dégats reels: " . $damageReal;

        
        
        $ennemy -> setHealthPoint($ennemy -> getHealthPoint() - $damageReal);
        echo $ennemy -> getName() . " à perdu de la vie, vie restante: " . $ennemy -> getHealthPoint() . "<br>";

        //echo "capacité de l'arme: " . $this -> getWeapon() -> getCapacity() . "<br>";

        echo "L'arme a " . $this -> getWeapon() -> getMunition() . "munitions<br>";

        $this -> getWeapon() -> setMunition(($this -> getWeapon() -> getMunition()) - $this -> getWeapon() -> getCapacity());

        echo "il reste " . $this -> getWeapon() -> getMunition() . "munitions<br>";



        //echo $this -> getWeapon() -> setMunition(($this -> getWeapon() -> getMunition()) - $this -> getWeapon() -> getCapacity());
        

        
    }

    
}
