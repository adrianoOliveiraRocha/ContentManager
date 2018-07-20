<?php
session_start();

if (isset($_SESSION['loged'])) {
	if (! $_SESSION['loged']) {
		header("location:forbidden.php");
	}
} else {
	header("location:forbidden.php");
}

require_once '../../config.php';
require_once CATALOG_DAO . 'categoryDao.php';
require_once CONNECT;
$category = CategoryDAO::getThisCategory($_GET['id']);

$inputCategoryName = '<input class="form-control" name="category_name" .
value="'.$category["name"].'">';

$inputCategoryId = '<input class="form-control" name="idcategory" .
value="'.$category["idcategory"].'" type="hidden">';

$dominio = getDominio();
$action_form = getDominio() . 'run_edit_category';

?>

<!-- HTML -->
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- links com css e javascript -->
 	<?php include_once '../../accounts/templates/include/links.php'; ?>

	<title>Editar Categoria</title>
  </head>
  <body>

 	<div class="container-fluid">
 		<!-- menu admin -->
	 	<?php include_once '../../accounts/templates/include/menu_admin.php'; ?>

		<div class="panel-body"
		style="width: 50%; margin-left: auto;
		margin-right: auto; margin-top: 5%;">

			<form action=<?php echo $action_form; ?> method="POST">
				<div class="form-group">
					<label>Nome da Categoria:</label>
					<?php
          echo $inputCategoryName;
					echo $inputCategoryId;
          ?>
				</div>

				<button type="submit" class="btn btn-primary">Editar</button>
			</form>

		</div>
    </div>

  </body>

</html>
