
<?php


$dsn = "mysql:host=localhost; dbn:system_db;charset=utf8";
$user = "root";
$pass = "";

try {

	$conn = new PDO($dsn, $user, $pass);
	echo "Conexão foi executada com sucesso!!!<br>";
	return $conn ;

} catch (PDOException $e) {

	echo "Error: ".$e->getMessage();

}



?>
