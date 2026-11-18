<?php

require_once 'Aluno.php';

$aluno1 = new Aluno("João Pedro", 17, "Desenvolvimento de Sistemas");
$aluno1->exibirDados();

echo "<hr>";

$aluno2 = new Aluno("Murilo", 17, "Educação física");
$aluno2->exibirDados();
?>