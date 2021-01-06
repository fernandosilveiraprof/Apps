
<?php


// $dsn = "mysql:host=localhost; dbn:system_db;charset=utf8";
// $user = "root";
// $pass = "";

try{
	$pdo = new PDO("mysql:dbname=system_db;host=localhost", "root", "");

	print "conexao com o banco de dados foi bem sucedida";
}
catch(PDOException $e){
	echo "erro com banco de dados: ". $e->getMessage();


} catch(Exeption $e){
	echo "erro generico ".$e->getMessage();
};



?>
