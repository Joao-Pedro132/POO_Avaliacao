<?php
require_once 'Pagamento.php';

class Pix extends Pagamento{
    private float $desconto;
    public function __construct($nome, $valor){
        parent:: __construct($nome, $valor);
        $this->desconto = 0;
    }

    public function calcularTotal(){
        if ($this->getValor() > 0){
            $desconto = $this->getValor() * 0.10;
            $this->desconto = $desconto;
            $valorFinal = $this->getValor() - $desconto;
            return $valorFinal;
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