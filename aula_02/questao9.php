<?php

echo "Digite a temperatura: ";
$temperatura = (float) trim(readline());

if ($temperatura < 0) {
    echo "Muito fria" . PHP_EOL;
} elseif ($temperatura < 20) {
    echo "Fria" . PHP_EOL;
} elseif ($temperatura < 30) {
    echo "Agradavel" . PHP_EOL;
} else {
    echo "Quente" . PHP_EOL;
}
