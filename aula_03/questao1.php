<?php

echo "Digite o primeiro número: ";
$primeiro = (int) trim(readline());

echo "Digite o segundo número: ";
$segundo = (int) trim(readline());

if ($primeiro > $segundo) {
    echo "O primeiro número é maior." . PHP_EOL;
} elseif ($primeiro < $segundo) {
    echo "O segundo número é maior." . PHP_EOL;
} else {
    echo "Os dois números são iguais." . PHP_EOL;
}
