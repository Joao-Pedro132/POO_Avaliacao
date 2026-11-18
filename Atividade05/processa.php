<?php

require_once 'FuncionarioFixo.php';
require_once 'FuncionarioHorista.php';

$funcionarioFixo = new FuncionarioFixo("João Pedro", 2500);
echo $funcionarioFixo->getNome();
$funcionarioFixo->calcularSalario();

echo "<hr>";

$funcionarioHorista = new FuncionarioHorista("Daniel", 25, 100);
echo $funcionarioHorista->getNome();
echo $funcionarioHorista->calcularSalario();
?>