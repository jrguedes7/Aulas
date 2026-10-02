<?php

class Carrinho
{
    public $dono;
    public $itens = 0;

    public function mostrar()
    {
        echo "Carrinho de " . $this->dono . ": " . $this->itens . " item(ns)\n";
    }

    public function adicionar($quantos)
    {
        $this->itens += $quantos;
        $this->mostrar();
    }
}

$carrinho = new Carrinho();
$carrinho->dono = "Ana";
$carrinho->adicionar(3);
$carrinho->adicionar(2);
