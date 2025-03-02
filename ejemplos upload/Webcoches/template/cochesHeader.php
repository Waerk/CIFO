<?php
include 'config/config.php';
include 'libraries/autoload.php';

session_start();
include 'scripts/login.php';
function cabecera(){?>
    <header>
        <div class="headerTitle">
        <a href="index.php">
            <img src="imagenes/logo/logo.png" alt="logoInicio" class="imgLogo">
        </a>
        <h1>Coches de Coleccion</h1>
        </div>
        <div class="flex-container barranav">
            <nav class="flex2">
                <menu>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="galeria.php">Galeria</a>
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="contacto.php">Contactar</a></li>
                </menu>
                <div class="buscador">
       
                    <input type="text" id="buscar" placeholder="Buscar coches...">
                    <button type="submit" class="boton-buscar">Buscar</button>
                </div>
                <div>
                <?php if (Session::has('user')){?>
            		<p>Bienvenido <?= Session::get('user')->userName?>,
            		<a href='?logout'>Logout</a></p>
            	<?php } ?>
            	</div>
                    <a class="buttonlogin" href="login.php">LogIn</a>
            </nav>
        </div>
    </header>
<?php }?>
  