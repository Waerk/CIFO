<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - Coleccion de Coches</title>
	<link rel="stylesheet" href="css/cssportada.css">
	<link rel="icon" href="imagenes/logo/logo.png" type="image/x-icon">
    <script src="javascript/jsportada.js"></script>
</head>
<body>
	<?php 
	require_once 'template/cochesHeader.php';
	cabecera()
	?>
	<?php setcookie('cookiesAceptadas', "Aplicaciones web", 0);?>
	<?php if(!isset($_COOKIE['cookiesAceptadas'])){?>
    <div id="cookies">
        <div>
            <input type="checkbox" id="aceptar">
            <label>Aceptar to	das las cookies</label> <br>
            <button onclick="evaluar()">Aceptar</button> <br>
            <output id="mensaje"></output>
        </div>
    </div>
    <?php } ?>
 <div class="mainDiv">
    <nav class="flex1 leftmigas">
        <div class="migas">    
            <h2>Categorias:</h2>
            <figure>
                    <figcaption><a href="galeria.php">Japoneses</a></figcaption>
                    <a href="galeria.php">
                        <img src="imagenes/banderas/japan.png" alt="Japoneses" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="galeria.php">Americanos</a></figcaption>
                    <a href="galeria.php">
                        <img src="imagenes/banderas/us.png" alt="Americanos" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="galeria.php">Alemanes</a></figcaption>
                    <a href="galeria.php">
                        <img src="imagenes/banderas/germany.png" alt="Alemanes" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="galeria.php">Italianos</a></figcaption>
                    <a href="#galeria.php">
                        <img src="imagenes/banderas/italy.png" alt="Italianos" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="galeria.php">Britanicos</a></figcaption>
                    <a href="galeria.php">
                        <img src="imagenes/banderas/uk.png" alt="Britanicos" class="leftimagen">
                     </a>
            </figure>
            <figure>
                    <figcaption><a href="galeria.php">Españoles</a></figcaption>
                    <a href="galeria.php">
                        <img src="imagenes/banderas/spain.png" alt="Españoles" class="leftimagen">
                    </a>
            </figure>
            <figure>
                <figcaption><a href="galeria.php">Franceses</a></figcaption>
                <a href="galeria.php">
                    <img src="imagenes/banderas/france.png" alt="Franceses" class="leftimagen">
                </a>
            </figure>
        </div>
        </nav>
    <main class="flex2">
        <h2>Los mejores coches classicos</h2>
        <div class="parrafos">
            <p>En tiempos tan dificiles como los de hoy en dia donde los coches de combustión estan llegando a su fin , resulta crucial rendir homenaje a los vehículos clásicos de combustión, que representan una era dorada de la ingeniería y el diseño automotriz. 
                Estos coches no solo son un símbolo de innovación y estilo, sino también una conexión con el pasado, cuando el automóvil era una expresión de libertad y aventura. 
                En medio de la transición hacia tecnologías más sostenibles, como los vehículos eléctricos, preservar y celebrar los coches clásicos nos permite valorar cómo hemos llegado hasta aquí y reflexionar sobre el impacto cultural y emocional de estos motores que marcaron generaciones.
                Esta página busca preservar y celebrar su legado, permitiendo a los entusiastas recordar y compartir la magia que estos automóviles aportaron a nuestras vidas.
            </p>
            <br>
            <p>A medida que el mundo avanza hacia tecnologías más sostenibles y los motores eléctricos se convierten en el estándar, es vital no olvidar el impacto cultural y emocional de estos motores icónicos.
                La plataforma servirá como un espacio donde coleccionistas, expertos y admiradores puedan conectarse, explorar la historia, aprender sobre restauración y compartir su pasión. De esta manera, aseguramos que estos tesoros de combustión sigan siendo valorados y admirados en un mundo en constante cambio.
            </p>
        </div>
        <div class="slider">
            <img src="imagenes/portada/mustan69.png" id="img1" alt="foto1">
            <img src="imagenes/portada/rx7.png" id="img2" alt="foto2">
            <img src="imagenes/portada/rolls69.png" id="img3" alt="foto3">
            <img src="imagenes/portada/ferrari66.jpg" id="img4" alt="foto4">
            <img src="imagenes/portada/300sl.png" id="img5" alt="foto5">
        </div>
        <div class="parrafos">
            <p>Además, esta página no solo será un tributo a los vehículos clásicos, sino también un puente entre generaciones. Los más jóvenes tendrán la oportunidad de descubrir y apreciar la historia detrás de estos coches, mientras que los veteranos podrán revivir sus memorias y compartir sus experiencias. sigue</p>
            <br>
            <p>Esta interacción entre generaciones no solo fortalecerá la apreciación por los vehículos clásicos, sino que también fomentará un intercambio de conocimientos valioso. 
                Los más experimentados podrán transmitir sus habilidades de restauración, mantenimiento y conservación, mientras los jóvenes, con su perspectiva fresca y sus competencias tecnológicas, 
                podrán aportar ideas innovadoras para preservar y modernizar estas joyas automotrices. De esta manera, se crea una comunidad inclusiva donde la pasión por los coches clásicos se convierte en un lenguaje común, capaz de trascender edades, culturas y fronteras.</p>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/77TqwhNVJ7A?si=WXOTDIVhGitknGst" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="listaVideos">
            <h4>Lista de reproducción</h4>
            <p>Para no olvidar los buenos momentos que nos han dejado:</p>
            <video id="listaVideo" width="560" height="315" src="imagenes/video/olddays.mp4" autoplay controls muted></video>
        </div>
    </main>
    </div>
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