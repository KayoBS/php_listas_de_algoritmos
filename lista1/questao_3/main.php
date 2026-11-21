<?php
/*3. Leia o valor de uma compra nas Lojas Sua Melhor Compra e mostre o valor das prestações de
acordo com a quantidade de parcelas desejada pelo usuário. A loja está vendendo seus produtos
a vista ou parcelado em até 10 vezes sem juros.*/

$valor_compra = $_POST["valor_compra"];
$prestacoes = $_POST["parcelas"];

$valor_parcela = ($valor_compra / $prestacoes);

echo "<h3>Você deverá pagar R$$valor_parcela ao longo de $prestacoes meses</h3>"

?>
