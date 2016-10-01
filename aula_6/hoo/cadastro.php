
<?php
	require_once "core/settings.php";
	if(! isset($_SESSION)) session_start();

	if(! isset($_SESSION['email'])){
		header('Location: '.$URL_PATH.'login.php');
	}


?>

<html>
<header>
	<?php require "bootstrap.php";?>
</header>
<body>
<div class="row" style="margin-top: 20px;">
<div class="col-md-4"> </div>
<div class="col-md-4">	
		<div class="panel panel-danger" style="background-color: #fcfcf9;">
			<div class="panel-heading">
				Cadastrar novo usuario
			</div>
			<div class="panel-body">
				<form action="<?= $URL_PATH?>core/cadastro.php" method="POST" class="form-group">
  					<label for="nome">Nome</label>
  					<input type="text" name="nome" class="form-control" id="name" placeholder="Nome">

    				<label for="email">Email</label>
    				<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
  				
   					<label for="senha">Senha</label>
   					<input type="password" name="senha" class="form-control" id="senha" placeholder="Password" required>
   				</br>
    					
  					<button type="submit" class="btn btn-default">Cadastrar</button>
				</form>
			</div>

		</div>

	</div>
	<div class="col-md-4"> </div>

	
</div>
</body>
</html>