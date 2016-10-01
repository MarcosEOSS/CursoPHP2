<?php

require "../core/db_mysql.php";

$query = mysqli_query($con , 'SELECT * FROM usuarios');

/*while(($row= mysqli_fetch_assoc($query))){
	var_dump($row);
	echo "<hr>";
}
*/

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
	<!--<body>
		<div class="form-group">
		<form class="form-group" method="POST" action="teste_cadastro.php"></br>
			<input type="text" name="nome" placeholder="nome"></br>
			<input type="text" name="email" placeholder="email"></br>
			<input type="password" name="senha" placeholder="senha"></br>
			<input type="submit" value="Cadastrar">
		</form>
	</div>

	</body> -->
</html>

