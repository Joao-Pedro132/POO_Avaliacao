<?php

class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "Valor de R$ " . $valor . " Depositado com sucesso!";
        echo "<br>";
    }

    public function sacar($valor){
        if ($valor <= $this->saldo && $valor > 0){
            $this->saldo = $this->saldo - $valor;
            echo "Valor de R$ " . $valor . " Sacado com sucesso!";
            echo "<br>";
        }
        else{
            echo "Erro ao Sacar!";
            echo "<br>";
        }
    }

    public function getSaldo(){
        return Number_format($this->saldo, 2, ",", ".");
    }
}


?>