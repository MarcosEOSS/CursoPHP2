<?php

require "../core/db_mysql.php";


?>

<html>
	<body>
		<form method="POST" action="testecadastro.php">
			<input type="text" name="nome" placeholder="nome">
			<input type="text" name="email" placeholder="email">
			<input type="password" name="senha" placeholder="senha">
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>