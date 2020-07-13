<?php 

    $to = "kevinchieft@gmail.com";
    $subject = "Contato - Site";
    $txt = "Olá, \n Gostaria de conhecer a High Performance, 
    poderia entrar em contato comigo pelo telofone: ";
    $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt, $headers);

?>