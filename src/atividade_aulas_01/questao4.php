<?php
echo "Digite o primeiro numero: ";
$numero1 = (float) fgets(STDIN);
echo "Digite o segundo numero: ";
$numero2 = (float) fgets(STDIN);

echo "Soma: " . ($numero1 + $numero2) . PHP_EOL;
echo "Subtracao: " . ($numero1 - $numero2) . PHP_EOL;
echo "Multiplicacao: " . ($numero1 * $numero2) . PHP_EOL;

if ($numero2 != 0) {
	echo "Divisao: " . ($numero1 / $numero2) . PHP_EOL;
} else {
	echo "Divisao: nao e possivel dividir por zero" . PHP_EOL;
}
