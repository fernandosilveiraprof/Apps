<?php 
$nome = isset( $_GET['nome'] ) ? $_GET['nome'] : "não foi cadastrado" ;
$processador = isset( $_GET['processador'] ) ? $_GET['processador'] : "não foi cadastrado" ;
$memoria = isset( $_GET['memoria'] ) ? $_GET['memoria'] : "não foi cadastrado" ;
$armazenamento = isset( $_GET['armazenamento']) ? $_GET['armazenamento'] : "não foi cadastrado" ;
$placamae = isset( $_GET['placamae'] )? $_GET['placamae'] : "não foi cadastrado" ;

echo(
	"<br>" . $nome . 
	"<br>" . $processador . 
	"<br>" . $memoria . 
	"<br>" . $armazenamento . 
	"<br>" . $placamae
);
?>