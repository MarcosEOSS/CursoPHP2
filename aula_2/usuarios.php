<html>
<head>
	<?php require "bootstrap.php"; ?>
	<body>
	</head>
		
		<table class="table">
			<thead><th>Nome</th><th>Login</th><th>Action</th></thead>
			<tbody>
				<?php require "array/usuarios.php";?>
				
					<?php 
				#for ($i=0; $i < count($user) ; $i++) {

				#echo "<tr>";
				#	echo "<td>". $user[$i]['name']."</td>";
				#	echo "<td>". $user[$i]['login']."</td>";
				#echo "</tr>	";	
				?>			
				
				<?php foreach($user as $u): ?>
				<tr>
					<td><?= $u['name']?></td>
					<td><?= $u['login']?></td>
					<td>	
						<button class="btn btn-primary btn-sm"> Editar </button>
						<button class="btn btn-danger btn-sm"> Editar </button>
					</td>

				</tr>	
				<?php endforeach?>

				
				<tr>
					<td>Rafael</td>
					<td>rafael.silva@4linux.com.br</td>
					<td>	
						<button class="btn btn-primary btn-sm"> Editar </button>
						<button class="btn btn-danger btn-sm"> Editar </button>
					</td>
				</tr>
				<tr>
					<td>Alisson</td>
					<td>alisson.machado@4linux.com.br</td>
					<td>	
						<button class="btn btn-primary btn-sm"> Editar </button>
						<button class="btn btn-danger btn-sm"> Editar </button>
					</td>
				</tr>
			</tbody>
		</table>
		
		

			
		
	


	
	</body>

</html>