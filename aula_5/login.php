<?php
	$user = array(
		'email' => 'nicolas@teste.com.br',
		'senha' => '0123456',
		'name' => 'administrador'
		);
	$requireds = array('email', 'senha');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		foreach ($requireds as $e) {
			if(!array_key_exists($e, $_POST));{
				header('Location: pagina5.php?=error=missing_field');
			}
			if(empty($_POST[$e])){
				header('Location: pagina5.php?=error=missing_field');
			}
		}
	$login = $_POST['email'];
	$senha = $_POST['senha'];


	if($login == $user['email'] && $senha ==$user['senha']){
		if(!isset($_SESSION)) session_start();

		$_SESSION['email'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $user['name'];

		header('Location: index.php');
	}else{
		header('Location: pagina5.php?error=invalid_login');
	}

	}else
	{
		header('Location: pagina5.php');
	}

	

?>