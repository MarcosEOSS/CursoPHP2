<?php

#echo "\nDigite um numero ";
#$x = readline();
#$nao_e = 0;

function primos($x){
#echo "\nO numero > 2 e primo";

  for($i = 0; $i <=$x; $i++){
  	$nao_e = 0;
  	if($i%2 == 0)
  	  continue;
  	$cont = 0 ;

  	for($j = 0; $j <= $x; $j++){
  	  if($j == 0)
  	    continue;
  	  if($i%$j ==0)
  	  	$cont ++;
  	  
  	  if($cont > 2)
  	  	continue;
  	  

  	}
  	if($cont == 2)
  	 	$e_primo = true;
  	 echo "\n$i";
  }
}

primos(10000);
	






