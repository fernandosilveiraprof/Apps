<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Tech Corporation </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<header>
		<nav>
			<form action="index.php" method="get"> 
				<ul>
					<li><a href="?page=index.php"> início  </a></li>
					<li><a href="?page=QuemSomos.php"> Quem Somos?  </a></li>
				</ul>
				<ul>
					<li><a href="?page=cadastrar-usuario.php"> Cadastrar como usuário </a></li>
					<li><a href="?page=cadastrar-tecnico.php"> Cadastrar como Técnico </a>  </li>
					<li><a href="?page=login.php"> login </a></li>
				</ul>
			</form>
		</nav>

	</header>

	<article>
		<?php 
		$page = $_GET['page'] ? $_GET['page'] : "?page=inicio.php";

		require_once ('$page') ; 


		?>
	</article>
</body>
</html>