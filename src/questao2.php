<?php
$idade = (int) readline('Digite sua idade: ');
$possuiIngresso = strtolower(readline('Possui ingresso? (s/n): ')) === 's';

$acessoLiberado = $idade >= 18 && $possuiIngresso;

if ($acessoLiberado) {
	echo "Entrada liberada\n";
} else {
	echo "Acesso negado\n";
}