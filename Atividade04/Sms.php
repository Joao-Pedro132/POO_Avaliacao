<?php
require_once 'Notificacao.php';

class Sms extends Notificacao{
    public function enviarMensagem($mensagem){
        echo "SMS enviado: " . $mensagem . "<br>";
    }
}
?>