<?php
require_once 'Notificacao.php';

class Email extends Notificacao{
    public function enviarMensagem($mensagem){
        echo "E-mail enviado: " . $mensagem . "<br>";
    }
}

?>