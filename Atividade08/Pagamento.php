<?php

abstract class Pagamento{
    private string $nome;
    private float $valor;

    public function __construct($nome, $valor){
        $this->nome =$nome;
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract function calcularTotal();
}


?>