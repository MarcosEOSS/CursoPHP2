
<?php
	require_once "settings.php";
	require_once "db_mysql.php";
	if(! isset($_SESSION)) session_start();

	if(! isset($_SESSION['email'])){
		header('Location: '.$URL_PATH.'login.php');
	}

	$nome = htmlspecialchars($_POST['nome']);
	$email= htmlspecialchars($_POST['email']);
	$senha= htmlspecialchars($_POST['senha']);

	$sec_senha = sha1('batata' . $senha);

	$sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('%s', '%s', '%s')";
	$query = sprintf($sql, $nome, $email, $sec_senha);

	$result = mysqli_query($con, $query);
	if($result){
		header('Location: '. $URL_PATH . "index.php" );

	}else{
		echo "Deu erro: " . $con->error;
	}
?>
