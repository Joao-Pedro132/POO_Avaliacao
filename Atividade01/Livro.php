<?php

class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas;

    public function __construct($titulo, $autor, $paginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function exibirInformacoes(){
        return "Título: " . $this->titulo . " | Autor: " . $this->autor . " | Páginas: " . $this->paginas . " páginas";
    }
}


?>