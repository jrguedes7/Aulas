<?php

echo "Digite a nota: ";
$notaInput = trim(readline());

$notaInvalida = !is_numeric($notaInput) || ((float) $notaInput < 0 || (float) $notaInput > 10);

if ($notaInvalida) {
    echo "Nota inválida. Digite um número entre 0 e 10." . PHP_EOL;
} else {
    $nota = (float) $notaInput;
    echo "Nota registrada: " . $nota . PHP_EOL;
}
