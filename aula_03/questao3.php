<?php

echo "Digite o valor do pedido: ";
$valorPedido = (float) trim(readline());

echo "Cliente possui cartão? (s/n): ";
$cartao = strtolower(trim(readline()));

echo "Cliente possui Pix? (s/n): ";
$pix = strtolower(trim(readline()));

$pagamentoAceito = ($cartao === 's') || ($pix === 's');

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ " . number_format($valorPedido, 1, ',', '.') . PHP_EOL;
    echo "Pedido aprovado" . PHP_EOL;
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível" . PHP_EOL;
}
