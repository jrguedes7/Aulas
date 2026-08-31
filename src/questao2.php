<?php

echo "Digite a idade da pessoa: ";
$idade = (int) trim(readline());

if ($idade >= 0 && $idade <= 12) {
    echo "Classificacao: Crianca" . PHP_EOL;
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Classificacao: Adolescente" . PHP_EOL;
} elseif ($idade >= 18 && $idade <= 59) {
    echo "Classificacao: Adulto" . PHP_EOL;
} else {
    echo "Classificacao: Idoso" . PHP_EOL;
}
