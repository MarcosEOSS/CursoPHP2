
<?php
	require_once "settings.php";
	require_once "db_mysql.php";
	if(! isset($_SESSION)) session_start();

	if(! isset($_SESSION['email'])){
		header('Location: '.$URL_PATH.'login.php');
	}

	$id = htmlspecialchars($_POST['id']);
	$nome = htmlspecialchars($_POST['nome']);
	$email= htmlspecialchars($_POST['email']);
	$senha= htmlspecialchars($_POST['senha']);

	$sec_senha = sha1('is@be11i' . $senha);

	$sql = "UPDATE usuarios SET nome='%s', email='%s', senha='%s' WHERE id='%s'";
	$query = sprintf($sql, $nome, $email, $sec_senha, $id);
	
	$result = mysqli_query($con, $query);
	if($result){
		header('Location: '. $URL_PATH . "index.php" );

	}else{
		echo "Deu erro: " . $con->error;
	}
?>
