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
        echo $this -> getName() . " a été créé<br>Il a " . $this -> getHealthPoint() . " hp et c'est un " . $this -> getGender();
    }

    //getWeapon
    public function shootEnnemy(personnage $ennemy){
        
        $ennemy -> setHealthPoint($ennemy -> getHealthPoint() - $this -> getWeapon() -> getDamage());
        echo $ennemy -> getName() . "à perdu de la vie, vie retante: " . $ennemy -> getHealthPoint();
    }

    
}
