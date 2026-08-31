<?php

echo "Status do pedido\n";
echo "1 - Em processamento\n";
echo "2 - Enviado\n";
echo "3 - Entregue\n";
echo "Digite a opcao: ";
$status = (int) trim(readline());

switch ($status) {
    case 1:
        echo "Em processamento" . PHP_EOL;
        break;
    case 2:
        echo "Enviado" . PHP_EOL;
        break;
    case 3:
        echo "Entregue" . PHP_EOL;
        break;
    default:
        echo "Opcao invalida" . PHP_EOL;
        break;
}
