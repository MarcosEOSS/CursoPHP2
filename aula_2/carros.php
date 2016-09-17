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
  				require "array/carros_db.php";
  				for ($i = 0; $i < count($carros); $i++){
  					$x = $i + 1;
  					echo "</tr>";
  					echo "<td>Carro {$x}</td>";
  					echo "<td> $carros[$i] </td>";
  					echo "</tr>";
  				}
  				?>
  			</tbody>
  		
		</table>
	</body>

</html>