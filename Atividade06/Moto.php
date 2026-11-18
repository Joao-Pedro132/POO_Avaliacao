<?php

require_once 'Veiculo.php';

class Moto extends Veiculo{
    private string $tipoVeiculo = "Moto";

    public function __construct($modelo, $valorDiaria){
        parent:: __construct($modelo, $valorDiaria);
    }

    public function calcularAluguel($dias){
        if ($dias > 0){
          $resultad01 = $this->getValorDiaria() * $dias;
        $desconto = $resultad01 * 0.10;
        $resultadoFinal = $resultad01 - $desconto;
        return $resultadoFinal;  
        }else{
            return "Erro, dias tem que ser maior que 0!";
        }
    }

    public function getTipoVeiculo(){
        return $this->tipoVeiculo;
    }
}

?>