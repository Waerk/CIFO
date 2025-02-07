<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - Coleccion de Coches</title>
	<link rel="stylesheet" href="css/registro.css">
	<link rel="icon" href="imagenes/logo/logo.png" type="image/x-icon">
    <script src="javascript/registro.js"></script>
</head>
<body>
    <?php 
	require_once 'template/cochesHeader.php';
	cabecera()?>
    <main>
		<div class="cajaregistro">
            <h1>Registro</h1>
            <form action="#" method="post">
                <div class="cajainputs">
                    <label>Nombre de Usuario</label>
                    <input type="text" placeholder="Usuario" required>
                </div>
				<div class="cajainputs">
                    <label>Contraseña</label>
                    <input type="password" placeholder="Contraseña" required>
                </div>
				<div class="cajainputs">
                    <label>Nombre</label>
                    <input type="text" class="mayusculas" placeholder="Tu nombre" required>
				</div>
					<div class="cajainputs">
					<label>Apellidos</label>
					<input type="text" class="mayusculas" placeholder="Apellidos" required>
					</div>
                    <div class="cajainputs">
                        <label>DNI:</label>
                        <input type="text" placeholder="Introduce tu DNI" required>
                    </div>
                <div class="cajainputs">
                    <label>Correo Electrónico</label>
                    <input type="email" placeholder="Correo" required>
                </div>
                <div class="cajainputs">
                    <label>Número de Teléfono</label>
                    <input type="tel" placeholder="Teléfono" required>
                </div>
                <div class="cajainputs">
                    <label>Fecha de Nacimiento</label>
                    <input type="date" required>
                </div>
                <div class="cajainputs">
                    <label>País:</label>
                    <select id="pais" required>
                        <option value="" disabled selected>Selecciona tu país</option>
                        <option value="spain">España</option>
                    </select>
                </div>
                <div class="cajainputs">
                    <label>Selecciona una provincia:</label>
                    <select id="provincias">
                        <option value="" disabled selected>Selecciona tu provincia</option>
                        <option value="Álava">Álava</option>
                        <option value="Albacete">Albacete</option>
                        <option value="Alicante">Alicante</option>
                        <option value="Almería">Almería</option>
                        <option value="Asturias">Asturias</option>
                        <option value="Ávila">Ávila</option>
                        <option value="Badajoz">Badajoz</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Cáceres">Cáceres</option>
                        <option value="Cádiz">Cádiz</option>
                        <option value="Cantabria">Cantabria</option>
                        <option value="Castellón">Castellón</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Cuenca">Cuenca</option>
                        <option value="Girona">Girona</option>
                        <option value="Granada">Granada</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Huelva">Huelva</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Illescas">Illescas</option>
                        <option value="Jaén">Jaén</option>
                        <option value="La Coruña">La Coruña</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Las Palmas">Las Palmas</option>
                        <option value="León">León</option>
                        <option value="Lleida">Lleida</option>
                        <option value="Lugo">Lugo</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Málaga">Málaga</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Navarra">Navarra</option>
                        <option value="Ourense">Ourense</option>
                        <option value="Palencia">Palencia</option>
                        <option value="Pontevedra">Pontevedra</option>
                        <option value="Salamanca">Salamanca</option>
                        <option value="Segovia">Segovia</option>
                        <option value="Sevilla">Sevilla</option>
                        <option value="Soria">Soria</option>
                        <option value="Tarragona">Tarragona</option>
                        <option value="Teruel">Teruel</option>
                        <option value="Toledo">Toledo</option>
                        <option value="Valencia">Valencia</option>
                        <option value="Valladolid">Valladolid</option>
                        <option value="Vizcaya">Vizcaya</option>
                        <option value="Zamora">Zamora</option>
                        <option value="Zaragoza">Zaragoza</option>
                    </select>
            </div>
            <div class="cajainputs">
                <label>Dirección</label>
                <input type="text" placeholder="Introduce tu calle y número" required>
            </div>
				<div class="cajainputs">
					<label>
						<input type="checkbox" class="terminos" required>
						Acepto los términos y condiciones
					</label>
				</div>
                <div class="cajainputs">
					<label>
						<input type="checkbox" class="promociones" required>
						Acepto recibir promociones a mi correo electrónico
					</label>
				</div>
				<div class="cajainputs">
                    <button type="submit" class="registrarboton">Registrar</button>
                </div>
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
</html>