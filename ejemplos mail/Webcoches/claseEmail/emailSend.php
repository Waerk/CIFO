<?php
    include 'config/config.php';
    include 'libraries/autoload.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    }try{
        if (isset($_POST['email'], $_POST['username'], $_POST['asunto'], $_POST['mensaje'])) {
        $to = $_POST['email'];
        $from ="From: LOCALHOST <waerk36@gmail.com>\r\n";
        $name = $_POST['username'];
        $subject = $_POST['asunto'];
        $message = $_POST['mensaje'];
        
        $email = new Email($to, $from, $name, $subject, $message);
        $email->send();
        echo "ENVIADO";
        }else{
        echo "Faltan datos en el formulario";
        }
    }catch(EmailException $e){
        echo "No enviado: ".$e->getMessage();
    }finally {
        // Redirigir al usuario después de 5 segundos con header
        header("Refresh: 3; url=../contacto.php"); // Reemplaza 'pagina_principal.php' con el nombre de tu página principal
        exit;
    }
 ?>
    
 