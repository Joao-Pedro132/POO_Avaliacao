<?php

require_once 'Funcionario.php';

class FuncionarioHorista extends Funcionario{
    private float $valorHora;
    private int $horasTrabalhadas;

    public function __construct($nome, $valorHora, $horasTrabalhadas){
        parent:: __construct($nome);
        $this->valorHora = $valorHora;
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function calcularSalario(){
        $resultado = $this->valorHora * $this->horasTrabalhadas;
        return "Salário de: R$ " . Number_format($resultado, 2, ",", ".") . "<br>"; 
    }
}
?>