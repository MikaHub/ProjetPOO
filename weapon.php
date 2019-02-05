<?php

class Weapon {
   private $_name;
   private $_damage;
   private $_munition;

public function __construct($name, $damage, $munition){
    $this -> setName($name);
    $this -> setDamage($damage);
    $this -> setMunition($munition);
}

private function setName($name){
    $this -> _name = $name;
}
private function setDamage($damage){
    $this -> _damage = $damage;
}
private function setMunition($munition){
	$this -> _munition = $munition;
}

public function getName(){
    return $this -> _name;
}
public function getDamage(){
    return $this -> _damage;
}
public function getMunition(){
	return $this -> _munition;
}

}