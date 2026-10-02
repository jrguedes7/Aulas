<?php

// Modelei uma planta, um objeto real com especie, local e altura que podem variar.
class Planta
{
    public $especie;
    public $local;
    public $altura;

    public function crescer($centimetros)
    {
        $this->altura += $centimetros;
    }

    public function mudarLocal($novoLocal)
    {
        $this->local = $novoLocal;
    }

    public function mostrarStatus()
    {
        echo $this->especie . " no " . $this->local . ": " . $this->altura . " cm\n";
    }
}

$planta1 = new Planta();
$planta1->especie = "Samambaia";
$planta1->local = "jardim";
$planta1->altura = 25;
$planta1->crescer(5);

$planta2 = new Planta();
$planta2->especie = "Girassol";
$planta2->local = "varanda";
$planta2->altura = 60;
$planta2->mudarLocal("quintal");

$planta1->mostrarStatus();
$planta2->mostrarStatus();
