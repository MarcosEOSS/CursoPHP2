<?php 
function primos($ultimo_valor){
	for($i = 2 ; $i <= $ultimo_valor; $i++){
		$counter = 0;
		for($j = 1; $j <=$i; $j++){
			if($i % $j == 0){
				$counter +=  1;
			}
		}

		#echo "\n";
		#if($counter == 2){
		#	echo "Primo";
		#}
	}
}

primos(10000);
