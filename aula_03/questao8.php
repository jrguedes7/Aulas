<?php

echo "Digite um valor: ";
$entrada = trim(readline());

$igualIgual = ($entrada == 10) ? 'true' : 'false';
$identico = ($entrada === 10) ? 'true' : 'false';

echo "Tipo da entrada: " . gettype($entrada) . PHP_EOL;
echo "\$entrada == 10  →  " . $igualIgual . PHP_EOL;
echo "\$entrada === 10 →  " . $identico . PHP_EOL;


