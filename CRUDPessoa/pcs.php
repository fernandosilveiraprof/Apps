<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> pcs </title>
	<link rel="stylesheet" href="">
	<style>

		th{
			text-align: right;

		}

		h2{
			padding-left: 20px;

		}

	</style>
</head>
<body>
	<form action="recebepcs.php" method="post">

		<h2> Cadastrar pcs </h2>

		<table>
			<tr>
				<th><label for="nome">Nome: </label></th>
				<td><input type="text" name="nome" id="nome"></td>
			</tr>
			<tr>
				<th> <label for="memoria">Memória: </label> </th>
				<td> <input type="text" name="memoria" id="memoria"> </td>
			</tr>

			<tr>
				<th> <label for="hd"> HD / SSD: </label> </th>
				<td> <input type="text" name="hd" id="hd"> </td>
			</tr>

			<tr>
				<th> <label for="processador"> Processador: </label> </th>
				<td> <input type="text" name="processador" id="processador"> </td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit"> 
					<input type="reset">
				</th>
				
			</tr>
		</table>
	</form>
</body>
</html>