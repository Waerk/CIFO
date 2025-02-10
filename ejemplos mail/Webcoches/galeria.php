<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coleccion de Coches</title>
	<link rel="stylesheet" href="css/galeria.css">
	<link rel="icon" href="imagenes/logo/logo.png" type="image/x-icon">
    <script src="javascript/galeria.js"></script>
    <script src="javascript/Preview.js"></script>
</head>
<body>
    <?php
    require_once 'template/cochesHeader.php';
    cabecera();
    require_once 'upload.php';
    require_once 'exceptions/FileException.php';
    require_once 'libraries/File.php';
    require_once 'libraries/Filelist.php';
    ?>
    <main class="flex-container">
        <nav class="flex1 leftmigas">
        <div class="migas">    
            <h2>Categorias:</h2>
            <figure>
                    <figcaption><a href="#galeriaJapones">Japoneses</a></figcaption>
                    <a href="#galeriaJapones">
                        <img src="imagenes/banderas/japan.png" alt="Japoneses" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="#galeriaAmericanos">Americanos</a></figcaption>
                    <a href="#galeriaAmericanos">
                        <img src="imagenes/banderas/us.png" alt="Americanos" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="#galeriaAlemanes">Alemanes</a></figcaption>
                    <a href="#galeriaAlemanes">
                        <img src="imagenes/banderas/germany.png" alt="Alemanes" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="#galeriaItalianos">Italianos</a></figcaption>
                    <a href="#galeriaItalianos">
                        <img src="imagenes/banderas/italy.png" alt="Italianos" class="leftimagen">
                    </a>
            </figure>
            <figure>
                    <figcaption><a href="#galeriaBritanicos">Britanicos</a></figcaption>
                    <a href="#galeriaBritanicos">
                        <img src="imagenes/banderas/uk.png" alt="Britanicos" class="leftimagen">
                     </a>
            </figure>
            <figure>
                    <figcaption><a href="#galeriaEspañoles">Españoles</a></figcaption>
                    <a href="#galeriaEspañoles">
                        <img src="imagenes/banderas/spain.png" alt="Españoles" class="leftimagen">
                    </a>
            </figure>
            <figure>
                <figcaption><a href="#galeriaFranceses">Franceses</a></figcaption>
                <a href="#galeriaFranceses">
                    <img src="imagenes/banderas/france.png" alt="Franceses" class="leftimagen">
                </a>
            </figure>
        </div>
        </nav>
        <form method="post" enctype="multipart/form-data" action="upload.php">
			<label>Sube tu imagen de perfil:</label>
			<br>
			<input type="hidden" name="max_file_size" value="1240000">
			<input type="file" accept=".jpg, .jpeg, .gif, .png" name="fichero" id="file-with-preview" required>
			<br>
			<label for="carpeta">Selecciona una carpeta:</label>
    		<select name="carpeta" required>
        	<option value="alemanes">Alemanes</option>
        	<option value="americanos">Americanos</option>
        	<option value="britanicos">Britanicos</option>
        	<option value="españoles">Españoles</option>
        	<option value="franceses">Franceses</option>
        	<option value="italianos">Italianos</option>
        	<option value="japoneses">Japoneses</option>
    		</select>
			<input type="submit" value="enviar">.
			<figure>
			<img src="imagenes/default.png" id="preview-image" width="200">
			</figure>
		</form>	
            <section class="flex4 gallery" id="galeria">
            <h3 class="categoriasTitle">Classicos Japoneses (JDM)</h3>
             <div id="galeriaJapones" class="cajaJaponeses">
            <?php 
	   $directorioJap = "imagenes/japoneses";
	   $archivos =[];
	   
	   $handler = opendir($directorioJap);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioJap/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Americanos</h3>
	   <div class="cajaAmericanos" id="galeriaAmericanos">
            <?php 
	   $directorioAme = "imagenes/americanos";
	   $archivos =[];
	   
	   $handler = opendir($directorioAme);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioAme/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Alemanes</h3>
	   <div class="cajaAlemanes" id="galeriaAlemanes">
	   <?php 
	   $directorioAle = "imagenes/alemanes";
	   $archivos =[];
	   
	   $handler = opendir($directorioAle);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioAle/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Italianos</h3>
	   <div class="cajaItalianos" id="galeriaItalianos">
	   <?php 
	   $directorioIta = "imagenes/italianos";
	   $archivos =[];
	   
	   $handler = opendir($directorioIta);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioIta/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Britanicos</h3>
	   <div class="cajaBritanicos" id="galeriaBritanicos">
	   <?php 
	   $directorioBri = "imagenes/britanicos";
	   $archivos =[];
	   
	   $handler = opendir($directorioBri);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioBri/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Españoles</h3>
	   <div class="cajaEspañoles" id="galeriaEspañoles">
	   <?php 
	   $directorioEsp = "imagenes/españoles";
	   $archivos =[];
	   
	   $handler = opendir($directorioEsp);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioEsp/$foto'></figure>";
	   ?>
	   </div>
	   <h3 class="categoriasTitle">Classicos Franceses</h3>
	   <div class="cajaFranceses" id="galeriaFranceses">
	   <?php 
	   $directorioFra = "imagenes/franceses";
	   $archivos =[];
	   
	   $handler = opendir($directorioFra);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='imgGallery'><img class='imgSmall' src='$directorioFra/$foto'></figure>";
	   ?>
      </section>
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
        
