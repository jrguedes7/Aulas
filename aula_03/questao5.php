<?php

echo "Nome do aluno: ";
$nomeAluno = trim(readline());

echo "Primeira nota: ";
$nota1 = (float) trim(readline());

echo "Segunda nota: ";
$nota2 = (float) trim(readline());

echo "Terceira nota: ";
$nota3 = (float) trim(readline());

$media = ($nota1 + $nota2 + $nota3) / 3;
$aprovado = $media >= 7;
$recuperacao = $media >= 5 && $media < 7;

if ($aprovado) {
    $situacao = 'Aprovado';
} elseif ($recuperacao) {
    $situacao = 'Recuperação';
} else {
    $situacao = 'Reprovado';
}

echo "Aluno: " . $nomeAluno . PHP_EOL;
echo "Média: " . number_format($media, 2, '.', '') . PHP_EOL;
echo "Situação: " . $situacao . PHP_EOL;
