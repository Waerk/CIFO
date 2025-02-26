<?php 
require '../template/template.php';
    cabecera();
    ?>
        <h2>Detalles del libro</h2>
        <h3><?=$libro->titulo?></h3>
        
        <p><b>ISBN:</b> 		<?= $libro->isbn ?></p>
        <p><b>Titulo:</b> 		<?= $libro->titulo?></p>
        <p><b>Editorial:</b> 	<?= $libro->editorial?></p>
        <p><b>Autor:</b>		<?= $libro->autor?></p>
        <p><b>Idioma:</b>		<?= $libro->idioma?></p>
        <p><b>Edicion:</b>		<?= $libro->edicion?></p>
        <p><b>Edad Recomendada:</b>
        <?= $libro->edadrecomendada ? $libro->edadrecomendada : 'TP' ?></p>
        <br>
        <h2>Ejemplares de este libro</h2>
        <table class="bloqueCentrado w100">
        	<tr>
        	<th>ID</th><th>Estado</th><th>Precio</th>
        	</tr>
        	<?php foreach($ejemplares as $ejemplar){?>
        	<tr>
        		<td><?=$ejemplar->id?></td>
        		<td><?=$ejemplar->estado?></td>
        		<td><?=$ejemplar->precio?></td>
        	</tr>
        	<?php }?>
        </table>
        <br>
        <h2>Temas de este libro</h2>
        <table class="bloqueCentrado w100">
        	<tr>
        		<th>ID</th><th>Tema</th><th>Descripcion</th>
        	</tr>
        	<?php foreach($temas as $tema){?>
        	<tr>
        		<td><?=$tema->id?></td>
        		<td><?=$tema->tema?></td>
        		<td><?=$tema->descripcion?></td>
        	</tr>
        	<?php }?>
        </table>
        <div class="centrado">
        	<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>
        </div>
      </body>
 </html>	