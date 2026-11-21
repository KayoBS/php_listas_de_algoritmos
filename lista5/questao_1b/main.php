<?php
require_once __DIR__ . '/aluno.php';

$max = 10;
$alunos = array();

if (isset($_POST['nome']) && is_array($_POST['nome'])) {

  for ($i = 0; $i < $max; $i++) {
    $alunos[$i] = new Aluno(
      $_POST["matricula"][$i],
      $_POST["nome"][$i],
      $_POST["endereco"][$i],
      $_POST["media_geral"][$i]
    );
  }

  echo "<h1>Resultado do Cadastro dos Alunos</h1>";
  for ($i = 0; $i < $max; $i++) {
    $alunos[$i]->print();
  }

} else {
  echo "Nenhum dado encontrado. Por favor, preencha o formulário.";
}
?>
