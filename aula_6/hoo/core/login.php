<?php
	require 'settings.php';
	require_once "db_mysql.php";



	$user = array(
		'email' => 'admin@teste.com.br',
		'senha' => '0123456',
		'name' => 'administrador'
		);
	$requireds = array('email', 'senha');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		foreach ($requireds as $e) {
			if(!array_key_exists($e, $_POST));{
				header('Location:.' .$URL_PATH. 'login.php?=error=missing_field');
			}
			if(empty($_POST[$e])){
				header('Location: '. $URL_PATH. 'login.php?=error=missing_field');
			}
		}

	$login = $_POST['email'];
	$senha = $_POST['senha'];
	$sec_senha = sha1('is@be11i' . $senha);

	$sql = "SELECT * FROM usuarios WHERE email = '%s' AND senha = '%s'";
	$query = sprintf($sql, $login, $sec_senha);
	$result = mysqli_query($con, $query);




	$row = mysqli_fetch_assoc($result);

	
	if($login == $user['email'] && $senha ==$user['senha']){
	//if($row != null){
		if(!isset($_SESSION)) session_start();

		$_SESSION['email'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $user['name'];

		header('Location: '. $URL_PATH. 'index.php');
	}else{
		header('Location:'. $URL_PATH. 'login.php?=invalid_login');
	}

	}else
	{
		header('Location: '. $URL_PATH. 'login.php');
	}

?>