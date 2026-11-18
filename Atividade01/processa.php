<?php
require_once 'Livro.php';

$livro1 = new Livro("67", "João Pedro", 45);
echo $livro1->exibirInformacoes();

echo "<br>";

$livro1 = new Livro("Noite de um Beta", "Riquelmy", 69);
echo $livro1->exibirInformacoes();
?>