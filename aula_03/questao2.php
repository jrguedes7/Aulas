<?php

echo "Digite sua idade: ";
$idade = (int) trim(readline());

echo "Possui ingresso? (s/n): ";
$ingresso = strtolower(trim(readline()));

$acessoLiberado = ($idade >= 18) && ($ingresso === 's');

if ($acessoLiberado) {
    echo "Entrada liberada" . PHP_EOL;
} else {
    echo "Acesso negado" . PHP_EOL;
}
