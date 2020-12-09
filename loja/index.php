
<?php require_once 'frontend/header-aside.php'; ?>

<article>
	###
	<?php 
	$page = $_GET['page']?$_GET['page']:"frontend/inicio.php";
	echo $page;
	include($page);

	?> 


</article>
<?php require 'frontend/footer.php'; ?>