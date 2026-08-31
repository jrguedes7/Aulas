<?php

echo "Digite o primeiro numero real: ";
$numero1 = (float) trim(readline());
echo "Digite o segundo numero real: ";
$numero2 = (float) trim(readline());

echo "Subtracao: " . ($numero1 - $numero2) . PHP_EOL;
echo "Multiplicacao: " . ($numero1 * $numero2) . PHP_EOL;
