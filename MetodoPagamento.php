<?php
// Define a interface comum para todos os métodos de pagamento
interface MetodoPagamento {
    public function pagar(float $valor): void;
}
?>