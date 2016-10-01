<?php

require "../core/db_mysql.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nome = htmlspecialchars($_POST['nome']) ;
	$email = htmlspecialchars($_POST['email']);

	$senha = htmlspecialchars($_POST['senha']);
	//String para gerar um
	$string =  "INSERT INTO usuarios (nome, email, senha) VALUES('%s', '%s' , '%s');";

	$sql = sprintf($string, $nome, $email, $senha);
	
	$result = mysqli_query($con, $sql);
	if($result){
		echo "cadastro feito corretamente<br />";
	}else{
		echo "Cadastro incorreto" . $con->error . "<br />";
	}
	echo $sql;

}

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="form-group">
		<form class="form-group" method="POST" action="teste_cadastro.php"></br>
			<input type="text" name="nome" placeholder="nome"></br>
			<input type="text" name="email" placeholder="email"></br>
			<input type="password" name="senha" placeholder="senha"></br>
			<input type="submit" value="Cadastrar">
		</form>
	</div>

	</body>
</html>