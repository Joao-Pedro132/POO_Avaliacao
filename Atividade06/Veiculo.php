<?php

abstract class Veiculo{
    private string $modelo;
    private float $valorDiaria;

    public function __construct($modelo, $valorDiaria){
        $this->modelo = $modelo;
        $this->valorDiaria = $valorDiaria;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getValorDiaria(){
        return $this->valorDiaria;
    }

    abstract function calcularAluguel($dias);

    abstract function getTipoVeiculo();
}


?>