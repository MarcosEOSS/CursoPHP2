<?php

	function soma($n1, $n2){

		$resultado = $n1 + $n2;
		return $resultado;
	}
	function sub($n1, $n2){

		$resultado = $n1 - $n2;
		return $resultado;
	}
	function mult($n1, $n2){

		$resultado = $n1 * $n2;
		return $resultado;
	}
	function div($n1, $n2){
		if($n2 > 0 || $n2 < 0 ){
		$resultado = $n1 / $n2;
		return $resultado;
		}else{
			return 0;
		}

	}

	$a = 10 ;
	$b = 0 ;

	echo $resultado = soma($a, $b) . " \n " ;
	echo $resultado = sub($a, $b). " \n " ;
	echo $resultado = mult($a, $b). " \n " ;
	echo $resultado = div($a, $b). " \n " ;

	