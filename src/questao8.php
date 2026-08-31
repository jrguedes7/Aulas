<?php

echo "Digite o usuario: ";
$usuario = trim(readline());
echo "Digite a senha: ";
$senha = trim(readline());

if ($usuario == "admin" && $senha == "1234") {
    echo "Login realizado com sucesso" . PHP_EOL;
} else {
    echo "Usuario ou senha invalidos" . PHP_EOL;
}
