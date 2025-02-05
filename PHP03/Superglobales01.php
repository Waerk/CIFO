<h1>La variable superglobal $_SERVER</h1>
<p>$_SERVER contiene informacion del servido y tambien algunos datos del cliente </p>


<?php
echo "Tu navegador: " .$_SERVER ['HTTP_USER_AGENT']."<br>";

echo "Tu IP:" .$_SERVER ['REMOTE_ADDR']."<br>";

echo "Software en el server: ".$_SERVER ['SERVER_SOFTWARE']."<br>";

echo "<pre>";

var_dump($_SERVER);

echo "<pre>";
?>