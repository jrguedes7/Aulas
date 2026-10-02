<?php

class Produto
{
    public $nome;
    public $preco;

    public function aumentarPreco($valor)
    {
        $this->preco = $this->preco + $valor; // Faltava $this-> para acessar o atributo preco nos dois lados da soma.
    }

    public function mostrar()
    {
        echo $this->nome . " custa R$ " . $this->preco . "\n";
    }
}

$produto = new Produto();
$produto->nome = "Caderno"; // Faltava remover o $ antes de nome, pois nome e uma propriedade do objeto.
$produto->preco = 10; // Faltava usar -> para acessar a propriedade preco do objeto.
$produto->aumentarPreco(5); // Faltava usar a variavel $produto para chamar o metodo no objeto.
$produto->mostrar(); // Faltavam os parenteses para executar o metodo.
