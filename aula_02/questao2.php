<?php

echo "Digite a idade: ";
$idade = (int) trim(readline());

if ($idade >= 0 && $idade <= 12) {
    echo "Crianca" . PHP_EOL;
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Adolescente" . PHP_EOL;
} elseif ($idade >= 18 && $idade <= 59) {
    echo "Adulto" . PHP_EOL;
} else {
    echo "Idoso" . PHP_EOL;
}
