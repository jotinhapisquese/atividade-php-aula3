<?php
$entrada = readline('Digite um valor: ');

$comparacaoSolta = $entrada == 10;
$comparacaoEstrita = $entrada === 10;

echo 'Tipo da entrada: ' . gettype($entrada) . "\n";
echo '$entrada == 10: ' . ($comparacaoSolta ? 'true' : 'false') . "\n";
echo '$entrada === 10: ' . ($comparacaoEstrita ? 'true' : 'false') . "\n";