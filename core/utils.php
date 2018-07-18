<?php
/**
 * This class is a utility for aleatory things
 */
class Utils{
	
	public static function isLoged(){
		
		$html_loged = '<li class="nav-item">' . 
						"<a class='nav-link' href ='sair'>Sair</a>".
					  "</li>";
		$html_no_loged = '<li class="nav-item">' . 
						"<a class='nav-link' href ='entrar'>Entrar</a>".
					  "</li>";
		$call_admin = '<li class="nav-item">' . 
						"<a class='nav-link' href ='admin'>Área Administrativa</a>".
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

	public static function getMessage($alert){
		if ($alert == 'success') {
			echo '<div class="alert alert-success alert-dismissible">'.
			       '<button type="button" class="close" data-dismiss="alert">&times;</button>'.
			       'Operação realizada com sucesso!'.
			     '</div>';
		} else if ($alert == 'error'){
			echo '<div class="alert alert-danger alert-dismissible">'.
			       '<button type="button" class="close" data-dismiss="alert">&times;</button>'.
			       'A operação não pode ser realizada!'.
			     '</div>';
		}
	}

	

}