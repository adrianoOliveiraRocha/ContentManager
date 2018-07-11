<?php
/**
 * This class is a utility for aleatory things
 */
class Utils{
	
	public static function isLoged(){
		
		$html_loged = '<li class="nav-item">' . 
						"<a class='nav-link' href ='accounts/".
						"control.php?key=logout'>Sair</a>".
					  "</li>";
		$html_no_loged = '<li class="nav-item">' . 
						"<a class='nav-link' href ='accounts/".
						"control.php?key=login'>Entrar</a>".
					  "</li>";
		$call_admin = '<li class="nav-item">' . 
						"<a class='nav-link' href ='accounts/".
						"templates/area_administrativa.php'>Área Administrativa</a>".
					  "</li>";
		
		if (isset($_SESSION['loged'])) {

			if ($_SESSION['loged']) {
				echo $call_admin;
				echo $html_loged;
			} else {
				echo $html_no_loged;
			}
		} else {
			echo $html_no_loged;
		}
		
	}

}