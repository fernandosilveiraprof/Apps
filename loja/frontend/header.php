<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Store  </title>
	<?php 
	require 'frontend/cssfiles.php'; 
	
	?>

</head>
<body>
	<header>
		<nav id="nav">
			<input id="equiv" type="checkbox" checked="">
			<label for="equiv" >
				&equiv;
			</label>
			<a href="Index.html">
				<span id="logo">
					Logo 
				</span>
				<span id="name">
					Nome da Empresa 
				</span>
			</a>

			<div class="menu">

				<label >
					<a href="index.php">

						<span class="nameitem">

							início

						</span>
						<span class="icon">
							<i class="fa fa-home"></i>

						</span>

					</a>

				</label>


				<input type="checkbox" id="OS">
				<label for="OS">O.S</label>

				<div class="submenu" id="ossub">

					<a href="os.php"> Criar O.S </a>
					<a href="os1.php"> Editar O.S </a>
					<a href="os2.php"> Buscar O.S </a>
					

				</div><!-- fim submenu -->


				<input type="checkbox" id="clientes">
				<label for="clientes">Clientes </label>

				<div class="submenu" id="clisub">

					<a href="?page=frontend/clientes.php"> Clientes </a>

				</div><!-- fim submenu -->

				<input type="checkbox" id="estoque">
				<label for="estoque">Estoque</label>

				<div class="submenu" id="estoquesub">
					<a href="estoque.php">
						<span class="nameitem">
							Estoque 

							<i class="fa fa-archive"></i>
						</span>
					</a>
				</div> <!-- fim submenu -->
				<input type="checkbox" id="servicos">
				<label for="servicos">Serviços</label>

				<div class="submenu" id="servsub">
					<a href="serv.php">
						<span class="nameitem">
							servicos 1 

							
						</span>
					</a>
				</div> <!-- fim submenu -->

			</div> <!-- fim menu -->

		</nav>	
	</header><!-- /header -->