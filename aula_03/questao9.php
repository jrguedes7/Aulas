<?php

echo "Digite a idade do atleta: ";
$idade = (int) trim(readline());

if ($idade < 7) {
    echo "Idade não permitida para inscrição" . PHP_EOL;
} elseif ($idade >= 7 && $idade <= 11) {
    echo "Categoria: Infantil" . PHP_EOL;
} elseif ($idade >= 12 && $idade <= 16) {
    echo "Categoria: Juvenil" . PHP_EOL;
} elseif ($idade >= 17 && $idade <= 59) {
    echo "Categoria: Adulto" . PHP_EOL;
} else {
    echo "Categoria: Master" . PHP_EOL;
}
