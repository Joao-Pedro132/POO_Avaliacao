<?php
require_once 'Pagamento.php';

class Cartao extends Pagamento{
    private float $acrescimo;

    public function __construct($nome, $valor){
        parent:: __construct($nome, $valor);
        $this->desconto = 0;
    }

    public function calcularTotal(){
        if ($this->getValor() > 0){
            $acrescimo = $this->getValor() * 0.05;
            $this->acrescimo = $acrescimo;
            $valorFinal = $this->getValor() + $acrescimo;
            return $valorFinal;   
        }
        else{
            echo "Valor de compra tem que ser maior que 0!";
        }
    }

    public function getDescontoAcrescimo(){
        return $this->acrescimo;
    }
}
?>