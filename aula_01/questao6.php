<?php

echo "Digite o primeiro numero: ";
$numero1 = (float) trim(readline());
echo "Digite o segundo numero: ";
$numero2 = (float) trim(readline());
echo "Digite o terceiro numero: ";
$numero3 = (float) trim(readline());

$media = ($numero1 + $numero2 + $numero3) / 3;

echo "Media: " . $media . PHP_EOL;
