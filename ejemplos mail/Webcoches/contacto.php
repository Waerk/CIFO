<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contactar - Coleccion de Coches</title>
	<link rel="stylesheet" href="css/contactar.css">
	<link rel="icon" href="imagenes/logo/logo.png" type="image/x-icon">
</head>
<body>
    <?php 
	require_once 'template/cochesHeader.php';
	cabecera()?>
    <main>
    <div class="formulario-contacto">
        <h2>Contacta con nosotros</h2>
        <form action="claseEmail/emailSend.php" method="POST">
            <label>Nombre de usuario:</label>
            <input type="text" name="username" placeholder="Ingresa tu nombre de usuario" required>

            <label>Correo electrónico:</label>
            <input type="email" name="email" placeholder="Ingresa tu correo electrónico" required>

            <label>Asunto:</label>
            <input type="text" name="asunto" placeholder="Ingresa tu correo electrónico" required>

            <label>Tu mensaje:</label>
            <textarea name="mensaje" placeholder="Escribe tu mensaje aquí" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</main>	
<footer>
    <div class="informacion">
        <h3>Información de la Empresa</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula, ipsum ac dignissim ullamcorper, augue purus efficitur ligula, vitae tincidunt lorem nisi sit amet ex. Fusce auctor mauris in tempus elementum.</p>
    </div>
    <div class="footer-container">
        <div class="footerMapa">
            <h3>Secciones principales</h3>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php">LogIn</a></li>
            </ul>
        </div>
        <div class="footerMapa">
            <h3>Recursos</h3>
            <ul>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/faq">Preguntas Frecuentes</a></li>
                <li><a href="/soporte">Soporte Técnico</a></li>
                <li><a href="/politicas">Políticas de Privacidad</a></li>
                <li><a href="/terminos">Términos y Condiciones</a></li>
            </ul>
        </div>
    </div>
    <div class="contacto">
        <h3>Contacto</h3>
        <p>Dirección: 123 Calle Ficticia, Ciudad, País.</p>
        <p>Teléfono: (123) 456-7890</p>
        <p>Email: contacto@empresa.com</p>
    </div>
    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.172717284538!2d-122.4194154846824!3d37.774929279759925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581c7cfa6d1cb%3A0x96a2c431536a52c7!2sSan%20Francisco%2C%20CA!5e0!3m2!1ses!2sus!4v1602747492529!5m2!1ses!2sus" allowfullscreen="" loading="lazy"></iframe>
    </div>
</footer>
</body>
</html>