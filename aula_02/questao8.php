<?php

echo "Digite o usuario: ";
$usuario = trim(readline());
echo "Digite a senha: ";
$senha = trim(readline());

if ($usuario == "admin" && $senha == "1234") {
    echo "Login ok" . PHP_EOL;
} else {
    echo "Dados invalidos" . PHP_EOL;
}
