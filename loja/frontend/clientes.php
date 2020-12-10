<h1> Clientes </h1>
<nav> 
	<a href="">cadastrar </a>
	<a href="">editar</a>
	<a href="">excluir</a>
</nav>

<div>
	<?php
	$mysqli = new mysqli("localhost", "root", "", "system_db");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$query = "SELECT `id`, `cpf`, `nome`, `nascimento`, `endereco`, `bairro`, `cidade`, `uf`, `ref` FROM `clientes` WHERE 1";

	if ($result = $mysqli->query($query)) {

		/* fetch object array */
		while ($row = $result->fetch_row()) {
			printf ($row[0], $row[1], $row[2], $row[3], $row[4]);
		}

		/* free result set */
		$result->close();
	}

	/* close connection */
	$mysqli->close();
	?>
</div>