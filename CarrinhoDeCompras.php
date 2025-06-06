<?php
require_once 'MetodoPagamento.php';

// Classe que utiliza uma das estratégias de pagamento
class CarrinhoDeCompras {
    private MetodoPagamento $metodoPagamento;

    public function __construct(MetodoPagamento $metodo) {
        $this->metodoPagamento = $metodo;
    }

    public function setMetodoPagamento(MetodoPagamento $novoMetodo): void {
        $this->metodoPagamento = $novoMetodo;
    }

    public function finalizarCompra(float $valor): void {
        $this->metodoPagamento->pagar($valor);
    }
}
?>
