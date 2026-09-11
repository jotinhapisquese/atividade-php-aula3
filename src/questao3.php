<?php
$valorPedido = (float) readline('Digite o valor do pedido: ');
$possuiCartao = strtolower(readline('Cliente possui cartão? (s/n): ')) === 's';
$possuiPix = strtolower(readline('Cliente possui Pix? (s/n): ')) === 's';

$pagamentoAceito = $possuiCartao || $possuiPix;

if ($pagamentoAceito) {
	echo "Valor do pedido: R$ $valorPedido\n";
	echo "Pedido aprovado\n";
} else {
	echo "Pedido recusado: nenhuma forma de pagamento disponível\n";
}