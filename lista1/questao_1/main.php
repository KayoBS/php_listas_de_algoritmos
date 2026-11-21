<?php
/*Leia a idade de uma pessoa expressa em anos, meses e dias e mostre-a expressa apenas em dias.
  Obs: Considere cada mês com 30 dias.*/

//estava usando get, mas substituí por post
$years = $_POST["years"];
$months = $_POST["months"];
$days = $_POST["days"];

$age = ( ($years*360) + ($months*30) + $days );

echo "<h3>Você tem $age dias de vida</h3>";
?>
