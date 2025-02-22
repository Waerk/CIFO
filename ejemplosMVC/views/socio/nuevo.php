<?php
require '../template/template.php';
cabecera();
?>
<form method="POST" action="index.php?controlador=socio/store">
	<label>DNI</label>
	<input type="text" name="dni">
	<br>
	<label>Nombre</label>
	<input type="text" name="nombre">
	<br>
	<label>Apellidos</label>
	<input type="text" name="apellidos">
	<br>
	<label>Fecha de Nacimiento</label>
	<input type="date" name="nacimiento">
	<br>
	<label>Email</label>
	<input type="text" name="email">
	<br>
	<label>Direccion</label>
	<input type="text" name="direccion">
	<br>
	<label>Codigo Postal</label>
	<input type="number" name="cp">
	<br>
	<label>Poblacion</label>
	<input type="text" name="poblacion">
	<br>
	<label>Provincia</label>
		<select name="provincia">
            <option value="alava">Álava</option>
            <option value="albacete">Albacete</option>
            <option value="alicante">Alicante</option>
            <option value="almeria">Almería</option>
            <option value="asturias">Asturias</option>
            <option value="avila">Ávila</option>
            <option value="badajoz">Badajoz</option>
            <option value="barcelona">Barcelona</option>
            <option value="burgos">Burgos</option>
            <option value="caceres">Cáceres</option>
            <option value="cadiz">Cádiz</option>
            <option value="cantabria">Cantabria</option>
            <option value="castellon">Castellón</option>
            <option value="ciudad-real">Ciudad Real</option>
            <option value="cordoba">Córdoba</option>
            <option value="cuenca">Cuenca</option>
            <option value="girona">Girona</option>
            <option value="granada">Granada</option>
            <option value="guadalajara">Guadalajara</option>
            <option value="gipuzkoa">Gipuzkoa</option>
            <option value="huelva">Huelva</option>
            <option value="huesca">Huesca</option>
            <option value="islas-baleares">Islas Baleares</option>
            <option value="jaen">Jaén</option>
            <option value="la-rioja">La Rioja</option>
            <option value="las-palmas">Las Palmas</option>
            <option value="leon">León</option>
            <option value="lleida">Lleida</option>
            <option value="lugo">Lugo</option>
            <option value="madrid">Madrid</option>
            <option value="malaga">Málaga</option>
            <option value="murcia">Murcia</option>
            <option value="navarra">Navarra</option>
            <option value="ourense">Ourense</option>
            <option value="palencia">Palencia</option>
            <option value="pontevedra">Pontevedra</option>
            <option value="salaman">Salamanca</option>
            <option value="santa-cruz-de-tenerife">Santa Cruz de Tenerife</option>
            <option value="segovia">Segovia</option>
            <option value="sevilla">Sevilla</option>
            <option value="soria">Soria</option>
            <option value="tarragona">Tarragona</option>
            <option value="teruel">Teruel</option>
            <option value="toledo">Toledo</option>
            <option value="valencia">Valencia</option>
            <option value="valladolid">Valladolid</option>
            <option value="vizcaya">Vizcaya</option>
            <option value="zamora">Zamora</option>
            <option value="zaragoza">Zaragoza</option>
	</select>
	<br>
	<label>Telefono</label>
	<input type="number" min="0" name="telefono">
	<br>
	<input type="submit" class="button" name="guardar" value="Guardar">
</form>

<div class="centrado">
	<a class="button" href="index.php?controlador=socio/list">Lista de Socios</a>
</div>
</body>
</html>