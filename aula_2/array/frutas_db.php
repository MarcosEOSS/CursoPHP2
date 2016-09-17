<?php


function _merge($chaves, $valores){
	$resultado = array();

	for($i = 0 ,$n = count($chaves); $i < $n ; $i++){
		$chave = $chaves[$i];
		$valor = $valores[$i];

		$resultado[$chave] = $valor ;
	}
	return $resultado ;
}

$c = array ("banana", "maca", "pera", "limao");
$v = array ("Rafael" , "Banana" , "Pera" , "Morango");

$resultado = _merge($c, $v);
?>