<?php

// Previsao: a primeira linha mostrara Valor: 8 e a segunda mostrara Valor: 10.
class Contador
{
    public $valor = 0;

    public function somar($quanto)
    {
        $this->valor = $this->valor + $quanto;
    }

    public function mostrar()
    {
        echo "Valor: " . $this->valor . "\n";
    }
}

$a = new Contador();
$b = new Contador();
$a->somar(5);
$a->somar(3);
$b->somar(10);
$a->mostrar();
$b->mostrar();

// Cada objeto guarda seu proprio valor; alterar $a nao altera o atributo de $b.
