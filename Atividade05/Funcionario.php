<?php

abstract class Funcionario{
    private string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome . "<br>";
    }

    abstract function calcularSalario();
}

?>