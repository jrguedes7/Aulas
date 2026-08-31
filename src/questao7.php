<?php

echo "Digite o valor da compra: ";
$valorCompra = (float) trim(readline());

if ($valorCompra < 100) {
    $desconto = 0.05;
} elseif ($valorCompra < 500) {
    $desconto = 0.10;
} elseif ($valorCompra < 1000) {
    $desconto = 0.15;
} else {
    $desconto = 0.20;
}

$valorDesconto = $valorCompra * $desconto;
$valorFinal = $valorCompra - $valorDesconto;

echo "Desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . PHP_EOL;
echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . PHP_EOL;
