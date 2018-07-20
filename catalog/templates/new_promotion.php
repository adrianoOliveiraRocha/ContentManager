<?php
session_start();

if (isset($_SESSION['loged'])) {
	if (! $_SESSION['loged']) {
		header("location:forbidden.php");
	}
} else {
	header("location:forbidden.php");
}
include_once '../../config.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- links com css e javascript -->
 	<?php include_once '../../accounts/templates/include/links.php'; ?>

	<title>Nova Promoção</title>
  </head>
  <body>

 	<div class="container-fluid">
 		<!-- menu admin -->
	 	<?php include_once '../../accounts/templates/include/menu_admin.php'; ?>

		<div class="panel-body"
		style="width: 50%; margin-left: auto;
		margin-right: auto; margin-top: 5%;">

			<form action="save_promotion" method="POST"
			 enctype="multipart/form-data">
				<div class="form-group">
					<label>Selecione uma Imagem</label>
					<input type="file" class="form-control" name="promotion_image">
				</div>
				<button type="submit" name="submit"
				class="btn btn-primary">Enviar</button>
			</form>

		</div>
    </div>

  </body>

</html>
