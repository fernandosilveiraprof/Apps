<?php
require("../backend/connect.php");

?>

<h1> Clientes </h1>

<nav> 
	<a href="">cadastrar </a>
	<a href="">editar</a>
	<a href="">excluir</a>
</nav>


<?php
$res = $pdo->prepare("INSERT INTO clientes(cpf,nome, nascimento,endereco,bairro,cidade,uf,ref) VALUES (:cpf, :nome, :nascimento, :endereco, :bairro, :cidade, :uf, :ref )");

$res -> bindValue(":cpf", "44465209899");
$res -> bindValue(":nome", "Eleonore");
$res -> bindValue(":nascimento", "1991-12-13");
$res -> bindValue(":endereco", "Rua dos Alfinetes");
$res -> bindValue(":bairro", "catiapoã");
$res -> bindValue(":cidade", "são vicente");
$res -> bindValue(":uf", "SP");
$res -> bindValue(":ref", "...");


$res->execute();



?>
