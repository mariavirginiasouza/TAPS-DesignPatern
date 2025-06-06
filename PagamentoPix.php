<?php
require_once 'MetodoPagamento.php';

// Estratégia de pagamento com PIX
class PagamentoPix implements MetodoPagamento {
    public function pagar(float $valor): void {
        echo "Pagamento de R$" . number_format($valor, 2, ',', '.') . " realizado via PIX.\n";
    }
}
?>