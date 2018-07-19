<?php
session_start();

if (isset($_SESSION['loged'])) {
	if (! $_SESSION['loged']) {
		header("location:proibido");
	}
} else {
	header("location:proibido");
}

include_once '../../core/utils.php';
include_once '../../config.php';
include_once RAIZ . 'include/connect.php';
include_once CATALOG_DAO . 'categoryDao.php';
$categories = CategoryDao::getAllCategories();

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Links css e javascript -->
  	<?php include_once '../../accounts/templates/include/links.php'; ?>

	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>

    <title>Todas as Categorias</title>
  </head>
  <body>

 	<div class="container-fluid">
 		<!-- MENU -->
	 	<?php include_once '../../accounts/templates/include/menu_admin.php'; ?>



		<div class="panel-body"
		style="width: 70%; margin-left: auto;
		margin-right: auto; margin-top: 5%;">

			<!-- Esse código exibe mensagens, se houver -->
			<?php
			if (isset($_GET['alert'])) {
				Utils::getMessage($_GET['alert']);
			}
			?>

			<table id="myTable" class="display">
			    <thead>
			        <tr>
			            <th>ID</th>
			            <th>Nome</th>
									<th></th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php

						if ($categories) {
							foreach ($categories as $category) {
								echo "<tr>";
								echo "<td>{$category['idcategory']}</td>";
								echo "<td>{$category['name']}</td>";
								echo '<td><a href="delete_category/'. $category['idcategory'] .'" class="btn btn-danger" role="button">Deletar</a></td>';
								echo "</tr>";
							}
						}

					?>

			    </tbody>
			</table>
		</div>
    </div>

  </body>

</html>
