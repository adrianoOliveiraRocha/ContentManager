<?php
// this codes define urls
$dominio = getDominio(); 
$home = $dominio . 'home';
$new_category = $dominio . 'nova_categoria';
$show_categories = $dominio . 'exibir_categorias';
$new_promotion = $dominio . 'new_promotion';
$show_promotions = $dominio . 'show_promotions';
?>
<!-- menu admin -->
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="#">Área Administrativa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href=<?php echo $home?>>Home</a>
		</li>

      	<!-- Dropdown -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#"
	      id="navbardrop" data-toggle="dropdown">
	        Categorias
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href= <?php echo $new_category?> >
	        	Nova Categoria
	        </a>
	        <a class="dropdown-item" href=<?php echo $show_categories; ?>>
	        	Exibir Categorias
	        </a>

	      </div>
	    </li>

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
	        <a class="dropdown-item" href=<?php echo $new_promotion; ?>>
	        	Nova Promoção
	        </a>
	        <a class="dropdown-item" href=<?php echo $show_promotions; ?>>
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
<!-- end of menu admin -->
