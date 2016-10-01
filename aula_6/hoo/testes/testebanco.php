<?php

require "../core/db_mysql.php";
$id_2 = 'admin@admin.coSm.br';
$query = mysqli_query($con ,'SELECT * FROM usuarios where email="nicolas@teste.com.br" ');
$res = mysqli_fetch_assoc($query);
echo $res['nome'];
//var_dump($res);

?>