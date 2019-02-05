<?php

class equipement {
    private $_name;
    private $_armor;
    private $_durabilite;

    public function __construct($name, $armor, $durabilite){
        $this -> setName($name);
        $this -> setArmor($armor);
        $this -> setDurabilite($durabilite);

    }
    private function setName($name){
        $this -> _name = $name; 
    }
    private function setArmor($armor){
        $this -> _armor = $armor;
    }
    private function setDurabilite($durabilite){
        $this -> _durabilite = $durabilite;
    }
    public function getName(){
        return $this -> _name;
    }
    public function getArmor(){
        return $this -> _armor;
    }
    public function getDurabilite(){
        return $this -> _durabilite;
    }
} 