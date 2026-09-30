<?php
// Classe Abstrata define o esqueleto do processo de pagamento
abstract class Pagamento {
    public function processarPagamento() {
        $this->validarDados();
        $this->conectarAoGateway();
        $this->autorizarPagamento();
        $this->confirmarPagamento();
    }

    abstract protected function validarDados();
    abstract protected function conectarAoGateway();
    abstract protected function autorizarPagamento();

    protected function confirmarPagamento() {
        echo "Pagamento confirmado.\n";
    }
}

// Subclasse implementando o pagamento via Cartão de Crédito[cite: 3]
class PagamentoCartaoCredito extends Pagamento {
    protected function validarDados() {
        echo "Validando dados do cartão de crédito...\n";
    }

    protected function conectarAoGateway() {
        echo "Conectando ao gateway de cartão de crédito...\n";
    }

    protected function autorizarPagamento() {
        echo "Autorizando pagamento via cartão de crédito...\n";
    }
}

// Subclasse implementando o pagamento via PayPal
class PagamentoPayPal extends Pagamento {
    protected function validarDados() {
        echo "Validando dados do PayPal...\n";
    }

    protected function conectarAoGateway() {
        echo "Conectando ao gateway do PayPal...\n";
    }

    protected function autorizarPagamento() {
        echo "Autorizando pagamento via PayPal...\n";
    }
}

// Uso
$pagamentoCartao = new PagamentoCartaoCredito();
$pagamentoCartao->processarPagamento();

echo"\n";

$pagamentoPayPal = new PagamentoPayPal();
$pagamentoPayPal->processarPagamento();