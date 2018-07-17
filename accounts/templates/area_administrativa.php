<?php
session_start();
include_once '../../core/utils.php';
if (isset($_SESSION['loged'])) {
	if (! $_SESSION['loged']) {
		header("location:proibido");
	}
} else {
	header("location:proibido");
}

?>

<!doctype html>
<html lang="pt-br">

  <head>
  	<!-- Links css e javascript -->
  	<?php include_once 'include/links.php'; ?>


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
 		<!-- MENU -->
 		<?php include_once 'include/menu_admin.php'; ?>


		<div class="panel-body" 
		style="width: 70%; margin-left: auto; 
		margin-right: auto; margin-top: 5%;">

			<!-- Esse código exibe mensagens, se houver -->
			<?php 
			if (isset($_GET['alert'])) {
				Utils::getMessage($_GET['alert']);
			}
			?>
			
			Áre administrativa
			
		</div>
    </div>

  </body>

</html>