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

$continuar = "sim" ;

do{

	echo "\rQual operacao ?: ";
	$opt = readline();

	echo "\rDigite o numero A :";
	$a = readline();

	echo "\rDigite o numero B :";
	$b = readline();

	switch ($opt) {
		case "soma":
			

			echo $resultado = soma($a, $b) . " \n " ;
			break;
		case "subtracao":
			echo $resultado = sub($a, $b). " \n " ;
			break;
		
		case "divisao":
			echo $resultado = div($a, $b). " \n " ;
			break;
		case "multiplicacao":
			echo $resultado = mult($a, $b). " \n " ;
			break;
		
		
		
		default:
			echo "Tem isso nao\n";
			
	}

	echo "Deseja fazer uma nova operacao? (sim) ou (nao)\n" ;
	$continuar = readline();

}while($continuar == "sim");

echo "Calculadora terminada com sucesso\n ";
