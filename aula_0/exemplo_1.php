<?php
	$string = "String";
	$inteiro = 10;
	$float = 10.1;
	$array1 = ["Azul" , "Amarelo", "Rosa"];
	$array = [ $array1, "Azul" , 1.2 , $float];

	var_dump($array);

	$array2 = [["Azul" , "Amarelo", "Rosa"],"Azul" , 1.2 , $float];
	echo "\n";
	var_dump($array2);

	echo $array2[0[2]];


