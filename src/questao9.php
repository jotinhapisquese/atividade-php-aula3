<?php
$idade = (int) readline('Digite a idade do atleta: ');

if ($idade < 7) {
	echo "Idade não permitida para inscrição\n";
} elseif ($idade >= 7 && $idade <= 11) {
	echo "Infantil\n";
} elseif ($idade >= 12 && $idade <= 16) {
	echo "Juvenil\n";
} elseif ($idade >= 17 && $idade <= 59) {
	echo "Adulto\n";
} else {
	echo "Master\n";
}