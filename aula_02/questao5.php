<?php

echo "Menu:\n";
echo "1 - Suporte\n";
echo "2 - Financeiro\n";
echo "3 - Vendas\n";
echo "Digite a opcao: ";
$opcao = (int) trim(readline());

switch ($opcao) {
    case 1:
        echo "Suporte" . PHP_EOL;
        break;
    case 2:
        echo "Financeiro" . PHP_EOL;
        break;
    case 3:
        echo "Vendas" . PHP_EOL;
        break;
    default:
        echo "Opcao invalida" . PHP_EOL;
        break;
}
