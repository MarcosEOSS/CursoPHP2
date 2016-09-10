<?php
	
	$n1 = 7;
	$n2 = 10;
	$n3 = 19;
	$n4 = 20;

	$a = $n1 > 5 && $n2 >5;
	$b = $n1 > 5 || $n2 < 10;
	$c = $n1 < 15 and $n4 != 5;
	$d = $n1 < 15 or $n4 != 5;


	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	



	