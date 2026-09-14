<?php

echo "Nome do cliente: ";
$nome = trim(readline());

echo "Idade: ";
$idade = (int) trim(readline());

echo "Renda mensal: ";
$rendaMensal = (float) trim(readline());

echo "Tempo de emprego (meses): ";
$tempoEmprego = (int) trim(readline());

echo "Está negativado? (s/n): ";
$negativado = strtolower(trim(readline()));

$idadePermitida = ($idade >= 18 && $idade <= 65);
$rendaOuEstabilidade = ($rendaMensal >= 2000 || $tempoEmprego >= 12);
$estaNegativado = ($negativado === 's');

$creditoAprovado = ($idadePermitida) && ($rendaOuEstabilidade) && (!$estaNegativado);

if ($idadePermitida) {
    echo "Idade permitida: atendida" . PHP_EOL;
} else {
    echo "Idade permitida: não atendida" . PHP_EOL;
}

if ($rendaOuEstabilidade) {
    echo "Renda ou estabilidade: atendida" . PHP_EOL;
} else {
    echo "Renda ou estabilidade: não atendida" . PHP_EOL;
}

if (!$estaNegativado) {
    echo "Nome limpo: atendida" . PHP_EOL;
} else {
    echo "Nome limpo: não atendida" . PHP_EOL;
}

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para " . $nome . PHP_EOL;
} else {
    echo "Resultado: Crédito não aprovado para " . $nome . PHP_EOL;
}
