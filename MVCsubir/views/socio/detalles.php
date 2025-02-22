<?php
require '../template/template.php';
cabecera();
?>
        <h2>Detalles del Socio</h2>
        <h3>Id: <?=$socio->id?></h3>
        
        <p><b>DNI:</b> 			<?= $socio->dni?></p>
        <p><b>Nombre:</b> 		<?= $socio->nombre?></p>
        <p><b>Apellidos:</b> 	<?= $socio->apellidos?></p>
        <p><b>Fecha de Nacimiento:</b>	<?= $socio->nacimiento?></p>
        <p><b>Email:</b>		<?= $socio->email?></p>
        <p><b>Direccion:</b>		<?= $socio->direccion?></p>
        <p><b>Codigo postal:</b>	<?= $socio->cp?></p>
        <p><b>Poblacion:</b>	<?= $socio->poblacion?></p>
        <p><b>Provincia:</b>	<?= $socio->provincia?></p>
        <p><b>Telefono:</b>	<?= $socio->telefono?></p>
        
        <h2>Prestamos de <?= $socio->nombre?> <?= $socio->apellidos?></h2>
        <table class="bloqueCentrado w100">
        	<tr>
        	<th>ID</th><th>Estado</th><th>Precio</th>
        	</tr>
        	<?php foreach($prestamos as $prestamo){?>
        	<tr>
        		<td><?=$prestamo->id?></td>
        		<td><?=$prestamo->prestamo?></td>
        		<td><?=$prestamo->idejemplar?></td>
        	</tr>
        	<?php }?>
        </table>
        <div class="centrado">
        	<a class="button" href="index.php?controlador=socio/list">Lista de Socios</a>
        </div>
      </body>
 </html>	