<?php 
	$resultado = null;

	if(isset($_GET['value'])){
	$resultado = fatorial($_GET['value']);

	}

	function fatorial($x){
		$resultado = 1;
		$array = array_fill(0, $x, null);

		for($i = 1; $i <= $x ; $i++){
			$array[$i] = $i;
			
		}
		for($i= 1; $i <= $x; $i++){
			
			$resultado = $resultado * $array[$i];
		}
		return $resultado;
	}


	fatorial(4);
?>

<html>
<header>

	<?php require "estilo.php";?>
</header>
<body>
	
	<form action="pagina6.php" method="GET">
		<input type="text" name="value"/>
		<input type="submit" name="Calcular"/>
	</form>

	<div>
		Resposta: <?php if($resultado != null): ?>
					<?= $resultado ?>
				<?php endif ?>

	</div>
</body>

 