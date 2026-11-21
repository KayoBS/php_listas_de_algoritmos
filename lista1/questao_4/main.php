<?php
/*4. Leia um número inteiro N e um percentual qualquer e escreva qual o valor do percentual
aplicado ao número.*/

$numero  = $_POST["numero"];
$porcentagem  = $_POST["porcentagem"];

$valor_final = ($numero * $porcentagem / 100);

echo "<h3>O resultado do número $numero aplicado a porcentagem de $porcentagem% é $valor_final</h3>";

?>
