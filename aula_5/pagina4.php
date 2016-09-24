<!DOCKTYPE HTML>
<?php 
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(! isset($_POST['to']) || empty($_POST['to'])){
			echo "<script> alert('Por Favor, informe o campo To ')</script>";

		}
		if(! isset($_POST['body']) || empty($_POST['body'])){
			echo "<script> alert('Por Favor, informe o campo Body')</script>";

		}

		if(mail($_POST['to'], 'Teste', $_POST['body'])){
			echo "<div class='alert alert-success'>";
			echo "Email Enviado";
			echo "</div>";

		}

	}

?>

<html>
<head>
<?php require "estilo.php";?> 
</head>
<body>
	<form method="POST" action="pagina4.php">
		<div class="form-group">
			<label>to: </label>
			<input type="text" class="form-control" name="to">
			
			
		</div>
		<div class="form-group">
			<label >Email : </label>
			<textarea name="body" class="form-control" > </textarea>
		</div>
			
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>

</body>
</html>