
<?php
	require_once "settings.php";
	require_once "db_mysql.php";
	if(! isset($_SESSION)) session_start();

	if(! isset($_SESSION['email'])){
		header('Location: '.$URL_PATH.'login.php');
	}

	$id = $_GET['id'];

	$sql= "DELETE FROM usuarios WHERE id='%d';";
	$query =  sprintf($sql, $id);

	if(mysqli_query($con, $query)){
		header('Location: '. $URL_PATH . 'index.php');

	}else{
		echo "Erro ao tentar deletar o usuario: " . $con->error;
	}
?>
