<?php

class weapons {
   private $_name;
   private $_damage;

public function __construct($name, $damage){
    $this -> setName($name);
    $this -> setDamage($damage);
}

private function setName($name){
    $this -> _name = $name;
}
private function setDamage($damage){
    $this -> _damage = $damage;
}
public function getName($name){
    return $this -> _name;
}
public function getDamage($damage){
    return $this -> _damage;
}
}