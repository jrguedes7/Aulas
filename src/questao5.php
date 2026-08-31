<?php

echo "Menu de atendimento\n";
echo "1 - Suporte\n";
echo "2 - Financeiro\n";
echo "3 - Vendas\n";
echo "Escolha uma opcao: ";
$opcao = (int) trim(readline());

switch ($opcao) {
    case 1:
        echo "Voce escolheu Suporte" . PHP_EOL;
        break;
    case 2:
        echo "Voce escolheu Financeiro" . PHP_EOL;
        break;
    case 3:
        echo "Voce escolheu Vendas" . PHP_EOL;
        break;
    default:
        echo "Opcao invalida" . PHP_EOL;
        break;
}
