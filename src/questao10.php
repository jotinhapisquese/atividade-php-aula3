<?php

$nome = readline('Nome do cliente: ');
$idade = (int) readline('Idade: ');
$rendaMensal = (float) str_replace(',', '.', readline('Renda mensal: '));
$tempoEmprego = (int) readline('Tempo de emprego (meses): ');
$estaNegativado = strtolower(trim(readline('Está negativado? (s/n): '))) === 's';

$idadePermitida = $idade >= 18 && $idade <= 65;
$rendaOuEstabilidade = $rendaMensal >= 2000 || $tempoEmprego >= 24;
$creditoAprovado = (($idadePermitida) && ($rendaOuEstabilidade) && (!$estaNegativado));

echo 'Idade permitida: ' . ($idadePermitida ? 'atendida' : 'não atendida') . PHP_EOL;
echo 'Renda ou estabilidade: ' . ($rendaOuEstabilidade ? 'atendida' : 'não atendida') . PHP_EOL;
echo 'Nome limpo: ' . (!$estaNegativado ? 'atendida' : 'não atendida') . PHP_EOL;

if ($creditoAprovado) {
	echo "Resultado: Crédito aprovado para $nome" . PHP_EOL;
} else {
	echo "Resultado: Crédito não aprovado para $nome" . PHP_EOL;
}
