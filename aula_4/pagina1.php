<?php

$string = "StrINg ";

echo "<hr>";


echo "<h3>strtoupper($string)</h3><br/>";
echo strtoupper($string) . "</br>";
echo "<hr>";


echo "<h3>strtolower($string)</h3><br/>";
echo strtolower($string) . "</br>";
echo "<hr>";

echo "<h3>ucfirst($string)</h3><br/>";
echo ucfirst($string) . "</br>";
echo "<hr>";

echo "<h3>ucfirst(strtolower($string))</h3><br/>";
echo ucfirst(strtolower($string)) . "</br>";
echo "<hr>";

echo "<h3>str_repeat(string, multiplicador)</h3><br/>";
echo str_repeat($string, 10) . "</br>";
echo "<hr>";

echo "<h3>str_replace(search, novo_valor, valor)</h3><br/>";
echo str_replace("Oi", "Tchau", "Oi mundo");
echo "<hr>";

echo "<h3>substr(string, posicao)</h3><br/>";
echo substr("01234567895698", 3);
echo "<hr>";

echo "<h3>strpos(valor, posicao)</h3><br/>";
echo strpos("0123456789", '7') . "<br/>";
echo strpos("0123456789", '9') . "<br/>";
echo strpos("0123456789", 'A') . "<br/>";
echo "<hr>";

echo "<h3>strstr(valor, pesquisa)</h3><br/>";
echo strstr("meu.nome@4linux.com.br", '@');
echo "<hr>";

echo "<h3>trim($string)</h3><br/>";
$s = ("           SEJA BEM VINDO        ");
var_dump($s);

echo var_dump(trim($s));
echo "<hr>";







?>