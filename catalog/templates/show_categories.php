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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 

	<!-- DataTable -->
	<link rel="stylesheet" 
	href="https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/css/jquery.dataTables.css">
	
	<script src="https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.js"></script>
	
	<script src="https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>
	<!-- End DataTable -->



    <title>Todas as Categorias</title>
  </head>
  <body>

 	<div class="container-fluid">

	 	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		  <a class="navbar-brand" href="#">Área Administrativa</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="admin">Home</a>
				</li>

		      	<!-- Dropdown -->
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" 
			      id="navbardrop" data-toggle="dropdown">
			        Categorias
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" 
			        href="nova_categoria">
			        	Nova Categoria
			        </a>
			        <a class="dropdown-item" href="exibir_categorias">
			        	Exibir Categorias
			        </a>
			        
			      </div>
			    </li

			    <!-- Dropdown -->
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        Produtos
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#">
			        	Novo Produto
			        </a>
			        <a class="dropdown-item" href="#">
			        	Exibir Produtos
			        </a>
			        
			      </div>
			    </li>

			    <!-- Dropdown -->
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        Promoções
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#">
			        	Nova Promoção
			        </a>
			        <a class="dropdown-item" href="#">
			        	Exibir Promoções
			        </a>
			        
			      </div>
			    </li>

		      <li class="nav-item">
		        <a class="nav-link" href="home">Ir para o site</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="sair">
		        	Sair
		        </a>
		      </li>    
		    </ul>
		  </div>  
		</nav>



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
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
				
						if ($categories) {
							foreach ($categories as $category) {
								echo "<tr>";
								echo "<td>{$category['idcategory']}</td>";
								echo "<td>{$category['name']}</td>";
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