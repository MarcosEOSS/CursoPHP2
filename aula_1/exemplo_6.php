<?php
/*
echo "\n==============FOR 1 ============== \n";
for ($i=0; $i <=20 ; $i+=10) { 
	echo "\nContador $i";

	}
	
echo "\n==============FOR 2 ============== \n";

for ($i=20; $i >= 0 ; $i--) { 
	echo "\nContador $i";

	}
	

echo "\n==============FOR 3 ============== \n";
	
	$array = ["curintia", "santos" , "parmera", "sao paulo"];
	for ($i=0; $i < count($array) ; $i++) { 
		//echo "Time > " . $array[$i] . "Na posicao > " . ($i + 1 ). "\n"; 
		$string = sprintf("%d | %s ", ($i + 1 ), $array[$i]);
		echo "$string \n";

	}

	echo "\n==============FOR 4 ============== \n";
	
$nome = "Nicolas";

for ($i=0, $n = strlen($nome); $i < $n ; $i++) {
	$string = sprintf("Letra > %s , na posiao %d", $nome[$i], $i);
	echo "$string\n";
	}

	echo "\n==============FOR 5 ============== \n";

for ($i=0; $i <= 100; $i++) { 
	$mod = $i % 2;
	if ($mod == 0 || $i == 0 ) {
		continue;
	}
	echo "impar $i \n";
}
for ($i=0; $i < 20; $i++) { 
	if ($i == 3) {
		break;
	}
	echo "Contador $i \n";
}
*/

do{
	echo "Digite um numero : ";
	

	for($i = 0, $num = readline(); $i <= $num; $i ++ ){
		$mod1 = $num % 1 ;
		$mod2 = $num % $i;
		if($mod1 == 0){
			if($mod2 == 0 ){
				echo "$i\n";
			}
		}

	}

echo "Deseja continuar?: (sim) ou (nao)";
$resp = readline();
}while($resp == "sim");