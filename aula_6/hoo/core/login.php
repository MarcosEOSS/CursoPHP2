<?php
	require 'settings.php';


	$user = array(
		'email' => 'nicolas@teste.com.br',
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


	if($login == $user['email'] && $senha ==$user['senha']){
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