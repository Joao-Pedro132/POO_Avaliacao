<?php
require_once 'Pix.php';
require_once 'Cartao.php';
require_once 'Boleto.php';

$nome = $_POST["nome"];
$valor = $_POST["valor"];
$formaPagamento = $_POST["formaPagamento"];

if ($formaPagamento == "pix"){
    $pagamento = new Pix($nome, $valor);
}
elseif ($formaPagamento == "cartao"){
    $pagamento = new Cartao($nome, $valor);
}
else{
    $pagamento = new Boleto($nome, $valor);
}
$pagamento->calcularTotal();

echo "Nome: " . $pagamento->getNome() . " | Valor: " . Number_format($pagamento->getValor(), 2, ",", ".") . " | Forma de Pagamento: " . $formaPagamento . " | Desconto/Acrescimo: " . number_format($pagamento->getDescontoAcrescimo(), 2, ",", ".") . " | Valor Final: " . Number_format($pagamento->calcularTotal(), 2, ",", ".");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <a href="index.html">Voltar para o Index</a>
    </main>
</body>
</html>