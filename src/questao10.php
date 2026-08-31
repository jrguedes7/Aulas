<?php

echo "Status do pedido\n";
echo "1 - Em processamento\n";
echo "2 - Enviado\n";
echo "3 - Entregue\n";
echo "Escolha o status: ";
$status = (int) trim(readline());

switch ($status) {
    case 1:
        echo "Status: Em processamento" . PHP_EOL;
        break;
    case 2:
        echo "Status: Enviado" . PHP_EOL;
        break;
    case 3:
        echo "Status: Entregue" . PHP_EOL;
        break;
    default:
        echo "Status invalido" . PHP_EOL;
        break;
}
