<?php

class Livro
{
    public $titulo;
    public $autor;
    public $paginas;
}

$livro1 = new Livro();
$livro1->titulo = "O Pequeno Principe";
$livro1->autor = "Antoine de Saint-Exupery";
$livro1->paginas = 96;

$livro2 = new Livro();
$livro2->titulo = "Capitaes da Areia";
$livro2->autor = "Jorge Amado";
$livro2->paginas = 280;

echo $livro1->titulo . " - " . $livro1->autor . " - " . $livro1->paginas . " paginas\n";
echo $livro2->titulo . " - " . $livro2->autor . " - " . $livro2->paginas . " paginas\n";

// Existe 1 classe (Livro) e 2 objetos ($livro1 e $livro2).
