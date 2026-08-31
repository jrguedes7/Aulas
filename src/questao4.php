<?php

echo "Digite o valor total da compra: ";
$totalCompra = (float) trim(readline());

if ($totalCompra <= 50) {
    $frete = 10.00;
} elseif ($totalCompra <= 100) {
    $frete = 7.00;
} elseif ($totalCompra <= 200) {
    $frete = 5.00;
} else {
    $frete = 0.00;
}

$totalFinal = $totalCompra + $frete;

echo "Frete: R$ " . number_format($frete, 2, ',', '.') . PHP_EOL;
echo "Total da compra: R$ " . number_format($totalFinal, 2, ',', '.') . PHP_EOL;
