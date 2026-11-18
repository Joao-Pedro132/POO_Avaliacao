<?php
require_once 'Pagamento.php';

class Boleto extends Pagamento{
    private float $desconto;

    public function __construct($nome, $valor){
        parent:: __construct($nome, $valor);
        $this->desconto = 0;
    }

    public function calcularTotal(){
        if ($this->getValor() > 0){
            $desconto = 0;
            $this->desconto = $desconto;
            return $this->getValor();
        }
        else{
            echo "Valor de compra tem que ser maior que 0!";
        }
    }

    public function getDescontoAcrescimo(){
        return $this->desconto;
    }
}

?>