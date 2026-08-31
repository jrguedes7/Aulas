<?php

echo "Digite a nota do aluno: ";
$nota = (float) trim(readline());

if ($nota >= 7.0) {
    echo "Aluno aprovado" . PHP_EOL;
} elseif ($nota >= 5.0) {
    echo "Aluno em recuperacao" . PHP_EOL;
} else {
    echo "Aluno reprovado" . PHP_EOL;
}
