<?php

echo "Digite a distancia percorrida em km: ";
$distancia = (float) trim(readline());

$taxaFixa = 5.00;
$valorPorKm = 2.50;

$valorCorrida = $taxaFixa + ($distancia * $valorPorKm);

echo "Valor da corrida: R$ " . number_format($valorCorrida, 2, ',', '.') . PHP_EOL;
