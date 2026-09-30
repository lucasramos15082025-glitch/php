<?php

// Interface define o método de envio
interface EstrategiaNotificacao {
    public function enviar($mensagem);
}
// Implementação de envio via e-mail

class NotificacaoEmail implements EstrategiaNotificacao {
    public function enviar($mensagem) {
        echo "Enviando e-mail: $mensagem\n";
    }
}

// Implementação de envio via SMS

class NotificacaoSMS implements EstrategiaNotificacao {
    public function enviar($mensagem) {
        echo "Enviando SMS: $mensagem\n";
    }
}
// Classe de contexto que utiliza uma estratégia de notificação

class SistemaNotificacao {
    private $estrategia;

    public function __construct(EstrategiaNotificacao $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function enviarNotificacao($mensagem) {
        $this->estrategia->enviar($mensagem);
    }
}

// Uso[cite: 3]
$notificacaoEmail = new SistemaNotificacao(new NotificacaoEmail());
$notificacaoEmail->enviarNotificacao("Olá, você tem uma nova mensagem.");

echo"\n";

$notificacaoSMS = new SistemaNotificacao(new NotificacaoSMS());
$notificacaoSMS->enviarNotificacao("Seu código de verificação é 123456.");