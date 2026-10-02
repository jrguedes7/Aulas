<?php

class Lampada
{
    public $estado = "desligada";

    public function ligar()
    {
        $this->estado = "ligada";
    }

    public function desligar()
    {
        $this->estado = "desligada";
    }

    public function status()
    {
        echo "A lampada esta " . $this->estado . "\n";
    }
}

$lampada = new Lampada();
$lampada->status();
$lampada->ligar();
$lampada->status();
$lampada->desligar();
$lampada->status();
