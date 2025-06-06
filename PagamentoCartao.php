<?php
require_once 'MetodoPagamento.php';

// Estratégia de pagamento com Cartão de Crédito
class PagamentoCartao implements MetodoPagamento {
    public function pagar(float $valor): void {
        echo "Pagamento de R$" . number_format($valor, 2, ',', '.') . " realizado com Cartão de Crédito.\n";
    }
}
?>