<?php
require '../template/template.php';
cabecera();
?>
	<form method="POST" action="index.php?controlador=socio/update">
		<input type="hidden" name="id" value="<?=$socio->id?>">
		
		<label>DNI</label>
		<input type="text" name="dni" value="<?=$socio->dni?>">
		<br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$socio->nombre?>">
		<br>
		<label>Apellidos</label>
		<input type="text" name="apellidos" value="<?=$socio->apellidos?>">
		<br>
		<label>Fecha de Nacimiento</label>
		<input type="date" name="nacimiento" value="<?=$socio->nacimiento?>">
		<br>
		<label>Email</label>
		<input type="text" name="email" value="<?=$socio->email?>">
		<br>
		<label>Direccion</label>
		<input type="text" name="direccion" value="<?=$socio->direccion?>">
		<br>
		<label>Codigo Postal</label>
		<input type="text" name="cp" value="<?=$socio->cp?>">
		<br>
		<label>Poblacion</label>
		<input type="text" name="poblacion" value="<?=$socio->poblacion?>">
		<br>
		<label>Provincia</label>
		<select name="provincia">
            <option value="alava" <?= $socio->provincia=='Álava'? 'selected': ''?>>Álava</option>
            <option value="albacete" <?= $socio->provincia=='Albacete'? 'selected': ''?>>Albacete</option>
            <option value="alicante" <?= $socio->provincia=='Alicante'? 'selected': ''?>>Alicante</option>
            <option value="almeria" <?= $socio->provincia=='Almería'? 'selected': ''?>>Almería</option>
            <option value="asturias" <?= $socio->provincia=='Asturias'? 'selected': ''?>>Asturias</option>
            <option value="avila" <?= $socio->provincia=='Ávila'? 'selected': ''?>>Ávila</option>
            <option value="badajoz" <?= $socio->provincia=='Badajoz'? 'selected': ''?>>Badajoz</option>
            <option value="barcelona" <?= $socio->provincia=='Barcelona'? 'selected': ''?>>Barcelona</option>
            <option value="burgos" <?= $socio->provincia=='Burgos'? 'selected': ''?>>Burgos</option>
            <option value="caceres" <?= $socio->provincia=='Cáceres'? 'selected': ''?>>Cáceres</option>
            <option value="cadiz" <?= $socio->provincia=='Cádiz'? 'selected': ''?>>Cádiz</option>
            <option value="cantabria" <?= $socio->provincia=='Cantabria'? 'selected': ''?>>Cantabria</option>
            <option value="castellon" <?= $socio->provincia=='Castellón'? 'selected': ''?>>Castellón</option>
            <option value="ciudad_real" <?= $socio->provincia=='Ciudad Real'? 'selected': ''?>>Ciudad Real</option>
            <option value="cordoba" <?= $socio->provincia=='Córdoba'? 'selected': ''?>>Córdoba</option>
            <option value="cuenca" <?= $socio->provincia=='Cuenca'? 'selected': ''?>>Cuenca</option>
            <option value="gerona" <?= $socio->provincia=='Gerona'? 'selected': ''?>>Gerona</option>
            <option value="granada" <?= $socio->provincia=='Granada'? 'selected': ''?>>Granada</option>
            <option value="guadalajara" <?= $socio->provincia=='Guadalajara'? 'selected': ''?>>Guadalajara</option>
            <option value="guipuzcoa" <?= $socio->provincia=='Guipúzcoa'? 'selected': ''?>>Guipúzcoa</option>
            <option value="huelva" <?= $socio->provincia=='Huelva'? 'selected': ''?>>Huelva</option>
            <option value="huesca" <?= $socio->provincia=='Huesca'? 'selected': ''?>>Huesca</option>
            <option value="islas_baleares" <?= $socio->provincia=='Islas Baleares'? 'selected': ''?>>Islas Baleares</option>
            <option value="jaen" <?= $socio->provincia=='Jaén'? 'selected': ''?>>Jaén</option>
            <option value="la_coruna" <?= $socio->provincia=='La Coruña'? 'selected': ''?>>La Coruña</option>
            <option value="la_rioja" <?= $socio->provincia=='La Rioja'? 'selected': ''?>>La Rioja</option>
            <option value="las_palmas" <?= $socio->provincia=='Las Palmas'? 'selected': ''?>>Las Palmas</option>
            <option value="leon" <?= $socio->provincia=='León'? 'selected': ''?>>León</option>
            <option value="lerida" <?= $socio->provincia=='Lérida'? 'selected': ''?>>Lérida</option>
            <option value="lugo" <?= $socio->provincia=='Lugo'? 'selected': ''?>>Lugo</option>
            <option value="madrid" <?= $socio->provincia=='Madrid'? 'selected': ''?>>Madrid</option>
            <option value="malaga" <?= $socio->provincia=='Málaga'? 'selected': ''?>>Málaga</option>
            <option value="murcia" <?= $socio->provincia=='Murcia'? 'selected': ''?>>Murcia</option>
            <option value="navarra" <?= $socio->provincia=='Navarra'? 'selected': ''?>>Navarra</option>
            <option value="orense" <?= $socio->provincia=='Orense'? 'selected': ''?>>Orense</option>
            <option value="palencia" <?= $socio->provincia=='Palencia'? 'selected': ''?>>Palencia</option>
            <option value="pontevedra" <?= $socio->provincia=='Pontevedra'? 'selected': ''?>>Pontevedra</option>
            <option value="salamanca" <?= $socio->provincia=='Salamanca'? 'selected': ''?>>Salamanca</option>
            <option value="santa_cruz_de_tenerife" <?= $socio->provincia=='Santa Cruz de Tenerife'? 'selected': ''?>>Santa Cruz de Tenerife</option>
            <option value="segovia" <?= $socio->provincia=='Segovia'? 'selected': ''?>>Segovia</option>
            <option value="sevilla" <?= $socio->provincia=='Sevilla'? 'selected': ''?>>Sevilla</option>
            <option value="soria" <?= $socio->provincia=='Soria'? 'selected': ''?>>Soria</option>
            <option value="tarragona" <?= $socio->provincia=='Tarragona'? 'selected': ''?>>Tarragona</option>
            <option value="teruel" <?= $socio->provincia=='Teruel'? 'selected': ''?>>Teruel</option>
            <option value="toledo" <?= $socio->provincia=='Toledo'? 'selected': ''?>>Toledo</option>
            <option value="valencia" <?= $socio->provincia=='Valencia'? 'selected': ''?>>Valencia</option>
            <option value="valladolid" <?= $socio->provincia=='Valladolid'? 'selected': ''?>>Valladolid</option>
            <option value="vizcaya" <?= $socio->provincia=='Vizcaya'? 'selected': ''?>>Vizcaya</option>
            <option value="zamora" <?= $socio->provincia=='Zamora'? 'selected': ''?>>Zamora</option>
            <option value="zaragoza" <?= $socio->provincia=='Zaragoza'? 'selected': ''?>>Zaragoza</option>
		</select>
		<br>
		<label>Telefono</label>
		<input type="text" name="telefono" value="<?=$socio->telefono?>">
		<br>
		<input type="submit" class="button" name="actualizar" value="Actualizar">
		<input type="reset" class="button" value="Reset">
	</form>
	</body>