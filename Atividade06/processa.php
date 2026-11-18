<?php
require_once 'Carro.php';
require_once 'Moto.php';

$carro1 = new Carro("Uno", 100.0);
$carro2 = new Carro("Gol", 50.0);

$moto = new Moto("Pop 100", 30.0);

$arrayVeiculos = [$carro1, $carro2, $moto];
$soma =0;

foreach ($arrayVeiculos as $executar){
    echo "Modelo: " . $executar->getModelo() . " | Tipo de Veículo: " . $executar->getTipoVeiculo() . " | Valor Final do Aluguel: R$" . Number_format($executar->calcularAluguel(3), 2, ",", ".");
    echo "<br>";

    $soma = $soma + $executar->calcularAluguel(3);
}

echo "Soma de todos os aluguéis: " . number_format($soma, 2, ",", ".");
?>