<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Store  </title>
	<?php require 'frontend/cssfiles.php'; ?>
</head>
<body>
	<?php 
	require 'frontend/header.php';
	require 'frontend/aside.php';
	require 'frontend/footer.php'; 
	?>
	<article>
		###
		<?php 
		$page = $_GET['page']?$_GET['page']:"frontend/inicio.php";
		echo $page;
		include($page);

		?> 


	</article>
</body>
</html>