<?php
session_start();

if (isset($_SESSION['loged'])) {
	if (! $_SESSION['loged']) {
		header("location:forbidden.php");
	}
} else {
	header("location:forbidden.php");
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- links com css e javascript -->
 	<?php include_once '../../accounts/templates/include/links.php'; ?>

	<title>Nova Categoria</title>
  </head>
  <body>

 	<div class="container-fluid">
 		<!-- menu admin -->
	 	<?php include_once '../../accounts/templates/include/menu_admin.php'; ?>

		<div class="panel-body" 
		style="width: 50%; margin-left: auto; 
		margin-right: auto; margin-top: 5%;">

			<form action="salvar_categoria" method="POST">
				<div class="form-group">
					<label for="email">Nome da Categoria:</label>
					<input class="form-control" name="category_name">
				</div>
				
				<button type="submit" class="btn btn-primary">Salvar</button>
			</form> 

		</div>
    </div>

  </body>

</html>