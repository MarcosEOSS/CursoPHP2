<!DOCKTYPE HTML>
<?php 
	
	if(isset($_GET['username'])){
		//echo $_GET['username'];

		if ($_GET['username'] == 'nicolas') {

			echo "acerto mizeravi";
		}

	}else{
		echo "</br>";
		echo "<div class='alert alert-danger'>";
		echo "Voce precisa digitar o nome ";
		echo "</div>";
	}
	

?>

<html>
<head>
<?php require "estilo.php";?> 
</head>
<body>
	<form method="GET" action="pagina2.php">
		<div class="form-group">
			<label>Nome: </label>
			<input type="text" class="form-control" name="username">
		</div>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>

</body>
</html>