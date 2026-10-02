<?php

class Jogador
{
    public $nome;
    public $pontos = 0;

    public function marcarPontos($quantos)
    {
        $this->pontos += $quantos;
    }

    public function zerar()
    {
        $this->pontos = 0;
    }

    public function status()
    {
        echo $this->nome . ": " . $this->pontos . " pontos\n";
    }
}

$ana = new Jogador();
$ana->nome = "Ana";
$ana->marcarPontos(10);
$ana->marcarPontos(5);

$bruno = new Jogador();
$bruno->nome = "Bruno";
$bruno->marcarPontos(8);

$ana->zerar();
$ana->status();
$bruno->status();
