<?php
$nota = readline('Digite a nota: ');

if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
	echo "Nota inválida. Digite um número entre 0 e 10.\n";
} else {
	$nota = (float) $nota;
	echo "Nota registrada: $nota\n"; 
}

