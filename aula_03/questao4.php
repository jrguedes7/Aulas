<?php

echo "Usuário: ";
$usuarioDigitado = trim(readline());

echo "Senha: ";
$senhaDigitada = trim(readline());

$usuarioValido = strcasecmp($usuarioDigitado, 'admin') === 0;
$senhaValida = $senhaDigitada === 'php2026';
$credenciaisValidas = $usuarioValido && $senhaValida;

if (!$credenciaisValidas) {
    echo "Usuário ou senha inválidos" . PHP_EOL;
} else {
    echo "Bem-vindo, admin!" . PHP_EOL;
}
