<?php
    include 'config/config.php';
    include 'libraries/autoload.php';

 $from.="From: LOCALHOST <waerk36@gmail.com>\r\n";
 
 $name = $_POST['username'];
 $to = $_POST['email'];
 $subject = $_POST['asunto'];
 $message = $_POST['mensaje'];
 
 $email = new Email($to, $from, $name, $subject, $message);
 echo $email->send() ? "Enviado" : "No enviado";
 ?>