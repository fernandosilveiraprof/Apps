<?php
try{
	$pdo = new PDO("mysql:dbname=SYSTEM1; host=localhost", "phpmyadmin","nando321");
}
catch (PDOException $e){
	echo "Erro no banco de dados: ".$e->getMessage();

}
catch(Exception $e){
	echo "Erro Genérico:".$e->getMessage();
}

$pdo->query("INSERT INTO PESSOA(nome, telefone,email) VALUES ('Tartaruguinha', '13111111', 'tartaruguinha@gmail.com')");

?>
