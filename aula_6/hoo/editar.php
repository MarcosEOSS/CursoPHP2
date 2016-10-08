
<?php
	require_once "core/settings.php";
	require_once "core/db_mysql.php";
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
				Editar cadastro de usuario
			</div>
			<div class="panel-body">
				<?php 
			$mysql_query = mysqli_query($con, "SELECT * FROM usuarios WHERE id=".$_GET["id"]."");
			$row = mysqli_fetch_assoc($mysql_query)
?>

				<form action="<?= $URL_PATH?>core/update.php" method="POST" class="form-group">
  					<input type="hidden" name="id" class="form-control" id="id" value="<?=$row['id']?>">

  					<label for="nome">Nome</label>
  					<input type="text" name="nome" class="form-control" id="name" placeholder="Nome" value="<?=$row['nome']?>">

    				<label for="email">Email</label>
    				<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=$row['email']?>" required>
  				
   					<label for="senha">Senha</label>
   					<input type="password" name="senha" class="form-control" id="senha" placeholder="Password" required>
   				</br>
    					
  					<button type="submit" class="btn btn-default">Salvar</button>
				</form>
			</div>

		</div>

	</div>
	<div class="col-md-4"> </div>

	
</div>
</body>
</html>