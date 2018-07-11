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
	
	<script src="{% static 'core/js/extra.js' %}" 
	type="text/javascript"></script>
		
	<script src="https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>
	<!-- End DataTable -->



    <title>Content Manager</title>
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
					<a class="nav-link" href="#">Link</a>
				</li>

		      	<!-- Dropdown -->
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        Postagens
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#">
			        	Exibir Postagens
			        </a>
			        <a class="dropdown-item" href="#">
			        	Nova Postagem
			        </a>
			        
			      </div>
			    </li>

		      <li class="nav-item">
		        <a class="nav-link" href="../../index.php">Ir para o site</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../control.php?key=logout">
		        	Sair
		        </a>
		      </li>    
		    </ul>
		  </div>  
		</nav>


		<div class="panel-body" 
		style="width: 70%; margin-left: auto; 
		margin-right: auto; margin-top: 5%;">
			<table id="myTable" class="display">
			    <thead>
			        <tr>
			            <th>Column 1</th>
			            <th>Column 2</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Row 1 Data 1</td>
			            <td>Row 1 Data 2</td>
			        </tr>
			        <tr>
			            <td>Row 2 Data 1</td>
			            <td>Row 2 Data 2</td>
			        </tr>
			        <tr>
			            <td>Nova info</td>
			            <td>test</td>
			        </tr>
			    </tbody>
			</table>
		</div>
    </div>

  </body>

</html>