<?php
/*2. Calcule e escreva a quantidade de dinheiro gasta por um fumante a partir da leitura das
informações número de anos que ele fuma, quantidade] de cigarros fumados por dia e preço de
uma carteira.*/

$anos_fumando  = $_POST["years_smoking"];
$cigarros_dia  = $_POST["cigarettes_per_day"];
$preco_cigarro = $_POST["cigarettes_price"];

$preco_final = ($preco_cigarro * $cigarros_dia * ($anos_fumando * 360));

echo "<h3>O valor que você gastou com cigarros até hoje é de R$$preco_final Reais</h3>";

?>
