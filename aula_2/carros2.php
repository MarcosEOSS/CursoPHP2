<html>
<head>
	
</head>
	<body>

		<h1>Teste<h1>
		<table border="1">
			<thead>
				<th>Coluna 1</th>
				<th>Coluna 2</th>
			</thead>
  			<tbody>
  				<?php 
  				require "array/donos_carros.php";
  				foreach ($array as $chave) {
  					echo "<tr>". $chave . "</t></br>";
  				}

  				?>
  			</tbody>
  		
		</table>
	</body>

</html>