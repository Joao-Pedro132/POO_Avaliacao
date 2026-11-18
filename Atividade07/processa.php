<?php

require_once 'Produto.php';

$nome = $_POST["nome"];
$preco = $_POST["precoUnitario"];
$quantidade = $_POST["quantidade"];

$produto1 = new Produto($nome, $preco, $quantidade);
echo "Nome: " . $produto1->getNome() . " | Preço unitário: " . Number_format($produto1->getPreco(), 2, ",", ".") . " | Quantidade: " . $produto1->getQuantidade() . " | Valor Total: " . Number_format($produto1->calcularTotal(), 2, ",", ".");
echo "<br>";

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
        <a href="index.html">Voltar para o Cadastro</a>
    </main>
</body>
</html>