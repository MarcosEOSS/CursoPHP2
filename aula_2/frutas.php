<html>
<head>
	<?php require "bootstrap.php"; ?>
	<body>
	</head>
		
		<table class="table">
			<thead><th>Nome</th><th>Login</th></thead>
			<tbody>
				<?php require "array/usuarios.php";?>
				<tr>
					<td><?= $user[0]['name']; ?></td>
					<td><?= $user[0]['login']; ?></td>
				</tr>
				<tr>
					<td><?= $user[1]['name']; ?></td>
					<td><?= $user[1]['login']; ?></td>
				</tr>
				<tr>
					<td><?= $user[2]['name']; ?></td>
					<td><?= $user[2]['login']; ?></td>
				</tr>
				<tr>
					<td>Rafael</td>
					<td>rafael.silva@4linux.com.br</td>
				</tr>
				<tr>
					<td>Alisson</td>
					<td>alisson.machado@4linux.com.br</td>
				</tr>
			</tbody>
		</table>
		
		

			
		
	


	
	</body>

</html>