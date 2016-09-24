<!DOCKTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body{
	margin-left:  10px;
	width: 80%;
}
</style>

</head>
<body>
	<?php

$keys = array('primeiro', 'segundo', 'terceiro');
$values = array('Hamilton', 'Rubinho', 'Alonso');

echo "<hr>";
echo "array_combine(array keys, array values)// combina os array 1 e 2, usando o primeiro como chave";
$new_array =  array_combine($keys, $values);
var_dump($new_array);
echo "<hr>";

echo "array_count_values(array) // conta os valores do array";
$array = array_count_values($keys);
var_dump($array);
echo "<hr>";

$skills_a = array("php", "TDD", "Scrum");
$skills_b = "php, TDD, Scrum";

echo "<hr>";
echo "<h2> Implode(glue, pieces)</h2></br>";
$value = implode($skills_a, ',') ;
var_dump($value);
echo "<hr>";



echo "<h2> Explode(delimiter, string)</h2></br>";
$value = explode(",", $skills_b) ;
var_dump($value);
echo "<hr>";

echo var_export($value);


$s = "INSERT (nome, senha) VALUES (%s, %s)";
$query = sprintf($s, "zezin", "******");

echo $query;


echo "<hr><hr><hr>";

$t = serialize(array('Rafael' => 'Oliveira' ));

echo $t . "\n";

var_dump(unserialize($t));



?>

</body>
</html>