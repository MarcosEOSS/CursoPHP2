

<?php
	if(! isset($_SESSION)) session_start();

	if(! isset($_SESSION['email'])){
		header('Location: pagina5.php');
	}




?>
<html>
<header>
	<?php require "estilo.php";?>
	

	<title>Bem Vindo |  <?= $_SESSION['nome']?></title>
</header>
<body>
	<center><h1> MEU SITE </h1></center>
	<p> Logado <?= $_SESSION['email'] ?> </p>
	<p> Senha <?= $_SESSION['senha'] ?> </p>

	<a href="logout.php">Sair</a>

</body>
</body>

