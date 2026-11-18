<?php

require_once 'ContaBancaria.php';

$conta1 = new ContaBancaria("João Pedro", 500);
echo "R$ " . $conta1->getSaldo();
echo "<br>";
$conta1->depositar(200);
$conta1->sacar(100);
echo "R$ " . $conta1->getSaldo();
?>