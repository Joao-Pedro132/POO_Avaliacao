<?php
require_once 'Email.php';
require_once 'Sms.php';


$email = new Email();
$sms = new Sms();

// tava sem nome para colocar no array kkkkkkk
$arrayDoForeach = [$email, $sms];

foreach ($arrayDoForeach as $executar){
    echo $executar->enviarMensagem("Olá, sou o João Pedro!");
}

?>