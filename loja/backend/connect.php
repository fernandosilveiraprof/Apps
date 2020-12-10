<?php
try{
	$pdo = new PDO("mysql:dbname=system_db; host=localhost", "root","");
}
catch (PDOException $e){
	echo "Erro no banco de dados: ".$e->getMessage();

}
catch(Exception $e){
	echo "Erro Genérico:".$e->getMessage();
}

$pdo->query("INSERT INTO PESSOA(nome, telefone,email) VALUES ('Tartaruguinha', '13111111', 'tartaruguinha@gmail.com')");

?>
