<?php
$nome = readline('Nome do aluno: ');
$primeiraNota = (float) readline('Primeira nota: ');
$segundaNota = (float) readline('Segunda nota: ');
$terceiraNota = (float) readline('Terceira nota: ');

$media = ($primeiraNota + $segundaNota + $terceiraNota) / 3;
$aprovado = $media >= 7;
$recuperacao = $media >= 5 && $media < 7;

if ($aprovado) {
	$situacao = 'Aprovado';
} elseif ($recuperacao) {
	$situacao = 'Recuperação';
} else {
	$situacao = 'Reprovado';
}

echo "Aluno: $nome\n";
echo 'Média: ' . number_format($media, 2) . "\n";
echo "Situação: $situacao\n";