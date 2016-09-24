<!DOCKTYPE HTML>

<?php
	if(isset($_GET['id'])){
		echo "<li>Voce esta acessando a pagina " . $_GET['id'] . '<'.'/'. 'li>';
	}

	$paginas = array(1,2,3,4,5,6); 

?>
<html>
<head>
	<?php require "estilo.php";?> 
	<title> Paginacao | METHOD :: GET</title>
</head>

<body>
	<?php foreach ($paginas as $pagina): ?>
		<a href="pagina3.php?id=<?=$pagina?>">
			<?= $pagina ?>
		</a>
	<?php endforeach ?>

</body>
</html>