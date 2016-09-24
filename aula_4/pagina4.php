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


string implode($array, ", ");
var_dump($array);

?>

</body>
</html>