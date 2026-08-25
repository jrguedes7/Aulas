<?php
echo "Digite o valor unitario do produto: ";
$valorUnitario = (float) fgets(STDIN);
echo "Digite a quantidade adquirida: ";
$quantidade = (int) fgets(STDIN);

$valorTotal = $valorUnitario * $quantidade;

echo "Valor total: " . $valorTotal . PHP_EOL;
