<?php
// Crie uma classe Notificacao com subclasses Email, SMS e Push. Todas devem sobrescrever o método enviar().
class Notificacao{
    public function enviar() {
        echo "Enviando..";
    }
}

//subclasses
class Email extends Notificacao {
    public function enviar() {
        echo "Enviando notificação por E-mail.\n";
    }
}

class SMS extends Notificacao {
    public function enviar() {
        echo "Enviando notificação por SMS.\n";
    }
}

class Push extends Notificacao {
    public function enviar() {
        echo "Enviando notificação por Push.\n";
    }
}
//--------TESTANDO--------

$email = new Email();
$email->enviar();
echo "\n";
$sms = new SMS();
$sms->enviar();
echo "\n";
$push = new Push();
$push->enviar();
?>