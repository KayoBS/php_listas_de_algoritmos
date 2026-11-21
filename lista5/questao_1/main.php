<?php
/*1. Elabore um algoritmo preencha o cadastro de 10 alunos contendo matricula, nome,
endereço e média geral. Após o preenchimento, deve ser somado o valor 0,5 às médias de
todos os alunos que tiveram médias maiores que 5. Em seguida escreva o vetor final.*/

require_once __DIR__ . '/aluno.php';

$i = 0;
$max = 10;

$alunos = array($max);

for ($i=0; $i < $max; $i++) { 
  $alunos[$i]= new Aluno($_POST["matricula"], $_POST["nome"], $_POST["endereco"], $_POST["media_geral"]);
}

for ($i=0; $i < $max; $i++) { 
  $alunos[$i]->print();
}

?>
