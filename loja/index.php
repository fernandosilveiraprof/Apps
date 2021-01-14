
<?php 
require_once 'frontend/header-aside.php'; 
require_once 'backend/connect.php';

?>

<article>
	

	<?php 
	$page = $_GET['page']?$_GET['page']:"frontend/inicio.php";
	
	include("$page");

	?> 


</article>

<?php require 'frontend/footer.php'; ?>