<?php

require_once 'Veiculo.php';

class Carro extends Veiculo{
    private string $tipoVeiculo = "Carro";

    public function __construct($modelo, $valorDiaria){
        parent:: __construct($modelo, $valorDiaria);
    }

    public function calcularAluguel($dias){
        if ($dias > 0){
            $resultado = ($this->getValorDiaria() * $dias) + 50;
            return $resultado;
        }else{
            return "Erro, dias tem que ser maior que 0!";
        }
    }

    public function getTipoVeiculo(){
        return $this->tipoVeiculo;
    }
}
?>