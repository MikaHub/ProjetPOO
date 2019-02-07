<?php 

final class Terroriste extends Personnage{
	public function triggerBomb(){
		$bomb = new Bomb();
		return $bomb;
	}
}