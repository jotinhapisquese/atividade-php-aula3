<?php
$primeiroNumero = (int) readline('Digite o primeiro número: ');
$segundoNumero = (int) readline('Digite o segundo número: ');

if ($primeiroNumero > $segundoNumero) {
	echo "O primeiro número é maior.\n";
} elseif ($primeiroNumero < $segundoNumero) {
	echo "O segundo número é maior.\n";
} else {
	echo "Os dois números são iguais.\n";
}