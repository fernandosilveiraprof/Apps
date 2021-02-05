<?php 
$nome = isset( $_GET['nome'] ) ? $_GET['nome'] : "não foi cadastrado" ;
$processador = isset( $_GET['processador'] ) ? $_GET['processador'] : "não foi cadastrado" ;
$memoria = isset( $_GET['memoria'] ) ? $_GET['memoria'] : "não foi cadastrado" ;
$armazenamento = isset( $_GET['armazenamento']) ? $_GET['armazenamento'] : "não foi cadastrado" ;
$placamae = isset( $_GET['placamae'] )? $_GET['placamae'] : "não foi cadastrado" ;

echo(
	"<br>" . 
	"<br>" . $nome . 
	"<br>" . $processador . 
	"<br>" . $memoria . 
	"<br>" . $armazenamento . 
	"<br>" . $placamae .
	"<br>"
);
$id = 0;

require 'connect.php';

$sql = 'INSERT INTO pcs (nome, processador, memoria, armazenamento, placamae) VALUES ( :n, :p, :m, :a, :pm)';
$sql = $pdo->prepare($sql);
$sql->bindParam(':n', "$nome");
$sql->bindParam(':n', "$processador");
$sql->bindParam(':n', "$memoria");
$sql->bindParam(':n', "$armazenamento");
$sql->bindParam(':n'," $placamae");

$sql -> execute();
;
?>