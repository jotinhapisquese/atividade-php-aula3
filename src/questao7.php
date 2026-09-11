<?php
$primeiraMatricula = trim(readline('Digite a primeira matrícula: '));
$segundaMatricula = trim(readline('Digite a segunda matrícula: '));

$comparacaoTexto = strcmp($primeiraMatricula, $segundaMatricula);

if ($comparacaoTexto < 0) {
	echo "Comparando como texto (strcmp): $primeiraMatricula vem primeiro\n";
} elseif ($comparacaoTexto > 0) {
	echo "Comparando como texto (strcmp): $segundaMatricula vem primeiro\n";
} else {
	echo "Comparando como texto (strcmp): as matrículas são iguais\n";
}

if ($primeiraMatricula < $segundaMatricula) {
	echo "Comparando com o operador <: $primeiraMatricula vem primeiro\n";
} elseif ($primeiraMatricula > $segundaMatricula) {
	echo "Comparando com o operador <: $segundaMatricula vem primeiro\n";
} else {
	echo "Comparando com o operador <: as matrículas são iguais\n";
}
