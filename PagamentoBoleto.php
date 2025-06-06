<?php
require_once 'MetodoPagamento.php';

// Estratégia de pagamento com Boleto Bancário
class PagamentoBoleto implements MetodoPagamento {
    public function pagar(float $valor): void {
        echo "Pagamento de R$" . number_format($valor, 2, ',', '.') . " gerado com Boleto Bancário.\n";
    }
}
?>