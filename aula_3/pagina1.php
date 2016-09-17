<?php require "common.php" ?>

<html>
<head><title>Pagina 1</title></head>
<body>
	<?php
		function soma_test($a, $b, $resultado){
			return $resultado == soma($a, $b);
		}

		if (soma_test(1,2,3)) {
			echo "Teste Ok";
		}
		else{
			echo "Teste Fail";
		}

	?>





</body>
</html>