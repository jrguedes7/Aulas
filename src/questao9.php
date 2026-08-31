<?php

echo "Digite a temperatura em Celsius: ";
$temperatura = (float) trim(readline());

if ($temperatura < 0) {
    echo "Temperatura: muito fria" . PHP_EOL;
} elseif ($temperatura < 20) {
    echo "Temperatura: fria" . PHP_EOL;
} elseif ($temperatura < 30) {
    echo "Temperatura: agradavel" . PHP_EOL;
} else {
    echo "Temperatura: quente" . PHP_EOL;
}
