<?php
try{
	$pdo = new PDO("mysql:store host=localhost", "root","");
	echo "bd ok";
}
catch (PDOException $e){
	echo "Erro no banco de dados: ".$e->getMessage();

}
catch(Exception $e){
	echo "Erro Genérico:" . $e->getMessage();
};


?>
