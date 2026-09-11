<?php
$usuario = readline('Usuário: ');
$senha = readline('Senha: ');

$credenciaisValidas = strcasecmp($usuario, 'admin') === 0 && $senha === 'php2026';

if (!$credenciaisValidas) {
	echo "Usuário ou senha inválidos\n";
} else {
	echo "Bem-vindo, admin!\n";
}