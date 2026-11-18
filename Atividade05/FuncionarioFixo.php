<?php
require_once 'Funcionario.php';

class FuncionarioFixo extends Funcionario{
    private float $salario;

    public function __construct($nome, $salario){
        parent:: __construct($nome);
        $this->salario = $salario;
    }

    public function calcularSalario(){
        echo "Salário Atual: R$ " . Number_format($this->salario, 2, ",", ".") . "<br>";
    }
}


?>