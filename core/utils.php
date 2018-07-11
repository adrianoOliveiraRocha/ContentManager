<?php
/**
 * This class is a utility for aleatory things
 */
class Utils{
	
	public static function isLoged(){
		
		if (isset($_SESSION['loged'])) {
			if ($_SESSION['loged']) {
				echo "<a class='nav-link' href ='accounts/ " . 
				"control.php?key=logout'>Sair</a>";
			} else {
				echo "<a class='nav-link' href ='accounts/" .
				 "control.php?key=login'>Entrar</a>";
			}
		} else {
			return false;
		}
		
	}

	public static function test(){
		echo "test";
	}	

}