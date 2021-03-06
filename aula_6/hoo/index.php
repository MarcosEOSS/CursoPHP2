

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
	

	<title>Bem Vindo |  <?= $_SESSION['nome']?></title>
</header>
<body>
<!-- ================= NAV BAR ==================== -->	

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="profile" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="#">Hoo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="cadastro.php">Cadastrar</a>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li role="separator" class="divider"></li>
            <li><a href="<?= $URL_PATH?>core/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- ===================================== NAV BAR ======================================== -->	
<!-- ======================================== TABELA ========================================-->


<table class="table table-hover">
 	<thead>
 		<th>ID</th>
 		<th>Nome</th>
 		<th>Email</th>
 		<th>Acoes</th>
	</thead>
	<tbody>
		<?php 
			$mysql_query = mysqli_query($con, "SELECT * FROM usuarios");


		?>

		<?php while(($row = mysqli_fetch_assoc($mysql_query))):?>
			<tr>
				<td><?= $row['id'] ?> </td>
				<td> <?= $row['nome'] ?></td>
				<td> <?= $row['email'] ?></td>
				<td>
					<a href="<?= $URL_PATH ?>editar.php?id=<?= $row['id']?>" class="btn btn-primary btn-sm">Editar</a> 
					<a href="<?= $URL_PATH ?>core/delete.php?id=<?= $row['id']?>" class="btn btn-danger btn-sm">Excluir</a></td>
			 </tr>
		<?php endwhile?>

	</tbody>
</table>


</body>
</body>

