<?php
echo "Digite o primeiro numero: ";
$numero1 = (float) fgets(STDIN);
echo "Digite o segundo numero: ";
$numero2 = (float) fgets(STDIN);
echo "Digite o terceiro numero: ";
$numero3 = (float) fgets(STDIN);

$media = ($numero1 + $numero2 + $numero3) / 3;

echo "Media: " . $media . PHP_EOL;
