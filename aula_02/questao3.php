<?php

echo "Digite a nota: ";
$nota = (float) trim(readline());

if ($nota >= 7.0) {
    echo "Aprovado" . PHP_EOL;
} elseif ($nota >= 5.0) {
    echo "Recuperacao" . PHP_EOL;
} else {
    echo "Reprovado" . PHP_EOL;
}
