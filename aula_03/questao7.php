<?php

echo "Digite a primeira matrícula: ";
$matricula1 = trim(readline());

echo "Digite a segunda matrícula: ";
$matricula2 = trim(readline());

$resultadoStrcmp = strcmp($matricula1, $matricula2);

if ($resultadoStrcmp < 0) {
    echo "Comparando como texto (strcmp): " . $matricula1 . " vem primeiro" . PHP_EOL;
} elseif ($resultadoStrcmp > 0) {
    echo "Comparando como texto (strcmp): " . $matricula2 . " vem primeiro" . PHP_EOL;
} else {
    echo "Comparando como texto (strcmp): as matrículas são iguais" . PHP_EOL;
}

if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: " . $matricula1 . " vem primeiro" . PHP_EOL;
} elseif ($matricula1 > $matricula2) {
    echo "Comparando com o operador <: " . $matricula2 . " vem primeiro" . PHP_EOL;
} else {
    echo "Comparando com o operador <: as matrículas são iguais" . PHP_EOL;
}

// A comparação em texto (strcmp) considera a ordem lexicográfica da string, enquanto
// o operador < compara os valores como números quando os operandos são numéricos.
// Por isso, com '10' e '9', a ordem pode mudar dependendo do tipo de comparação.
