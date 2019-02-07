<?php 

final class Antiterro extends Personnage{
	public function tryDefuseBomb($bomb, $defaultTimer){
		$trydefuse = rand(0,4);
		echo $this -> getName() . " essaye de desamorcer la bombe<br>";
		if($trydefuse == 4){
			$bomb -> setTimer($defaultTimer);
			echo "désamorçage réussi<br>";
		}	
		else{
			echo "desamorçage echoué<br>";
		}

	}

	
}