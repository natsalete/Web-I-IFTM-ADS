<?php
// include, include_once, require, require_once
//include -> coloca o código incluido
// include_once -> coloca uma só vez
// require -> inclui só quando necessário
// require_once -> inclui quando necessário somente 1 vez



// include_once "Funcionario.php";
include_once "Professor.php";

$prof = new Professor("Regina", 2500, "Engenharia");
echo "O prof " . $prof->nome . " que recebe R$" . $prof->salario . " e ministra a disciplina " . $prof->disciplina . "<br/><br/>";

// echo("Teste");
// echo("Teste");

$prof->aumentoSalario(500);
$prof->setDisciplina("Banco de Dados");

echo "O prof " . $prof->nome . " ministra a disciplina " . $prof->disciplina . " e recebe R$" .$prof->salario . "<br/><br/>";

Professor::teste();
