<h1> Clientes </h1>
<nav> 
	<a href="">cadastrar </a>
	<a href="">editar</a>
	<a href="">excluir</a>
</nav>


<?php
require("../backend/connect.php");



print_r($conn);


$sql = 'INSERT INTO pessoas (nome,idade) values (?,?)';

$stmt = $conn->prepare($sql);


$nome = "zika";
$idade = "22";


$stmt -> bindValue(1, $nome );
$stmt -> bindValue(2, $idade  );

if ($stmt->execute()){

	echo "<br>Salvo com sucesso";
}else{
	echo "<br>Erro ao salvar o registro no banco de dados ";

}


?>
