<?php
// Verificamos si el formulario fue enviado a través del método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    } else {
//preparacion de los parametros a pasarle a funcion mail()
$to = $_POST['email']; //receptor
$nombreUsuario = $_POST['username'];// nombre de usuario
$subject = $_POST['asunto']; //asunto
$message = $_POST['mensaje']; //mensaje

//cabeceras adicionales
$headers ="To: <$to>\r\n";
$headers .="From: LOCALHOST <waerk36@gmail.com>\r\n";

//llamamos a ala funcion mail con los parametros adecuados
if (mail($to, $subject, $message, $headers)){
    echo "Enviado, Gracias por tu mensaje!";
} else{
    echo "Hubo un problema al enviar el mensaje. Intentalo de nuevo.";
        }
    }
?>
