<?php

class Termometro
{
    public $cidade;
    public $temperatura = 0;

    public function registrar($valor)
    {
        $this->temperatura = $valor;
    }

    public function aquecer($graus)
    {
        $this->temperatura += $graus;
    }

    public function mostrar()
    {
        echo $this->cidade . ": " . $this->temperatura . " graus\n";
    }
}

$termometro = new Termometro();
$termometro->cidade = "Macapa";
$termometro->registrar(28);
$termometro->mostrar();
$termometro->aquecer(3);
$termometro->mostrar();
