<?php

echo "Digite o primeiro numero: ";
$numero1 = (float) trim(readline());
echo "Digite o segundo numero: ";
$numero2 = (float) trim(readline());
echo "Escolha a operacao (+, -, *, /): ";
$operacao = trim(readline());

switch ($operacao) {
    case '+':
        echo "Resultado: " . ($numero1 + $numero2) . PHP_EOL;
        break;
    case '-':
        echo "Resultado: " . ($numero1 - $numero2) . PHP_EOL;
        break;
    case '*':
        echo "Resultado: " . ($numero1 * $numero2) . PHP_EOL;
        break;
    case '/':
        if ($numero2 == 0) {
            echo "Erro: divisao por zero" . PHP_EOL;
        } else {
            echo "Resultado: " . ($numero1 / $numero2) . PHP_EOL;
        }
        break;
    default:
        echo "Operacao invalida" . PHP_EOL;
        break;
}
