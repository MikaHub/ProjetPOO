<?php

class Personnage{
    private $_name;
    private $_health_point;



    public function __construct($name){
        $this->setName($name);
        $this->setPointDeVie($_health_point);

    }

    private function setName($name){
        $this -> _name = $name;
    }

    private function setHealthPoint($_health_point) {
        $this -> _name = $_health_point;
    }

    
}
