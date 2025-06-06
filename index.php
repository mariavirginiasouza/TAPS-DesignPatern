<?php

require_once 'PagamentoCartao.php';
require_once 'PagamentoBoleto.php';
require_once 'PagamentoPix.php';
require_once 'CarrinhoDeCompras.php';

// Cliente escolhe Cartão
$carrinho = new CarrinhoDeCompras(new PagamentoCartao());
$carrinho->finalizarCompra(199.90);

// Muda para Boleto
$carrinho->setMetodoPagamento(new PagamentoBoleto());
$carrinho->finalizarCompra(199.90);

// Muda para PIX
$carrinho->setMetodoPagamento(new PagamentoPix());
$carrinho->finalizarCompra(199.90);
?>