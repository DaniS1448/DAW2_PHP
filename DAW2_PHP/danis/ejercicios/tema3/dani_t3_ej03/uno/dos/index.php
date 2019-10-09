Listado de cookies de <b>nivel 2</b> <?php echo pathinfo($_SERVER['REQUEST_URI'])['dirname']?>

<table border="2">
	<tr>
		<th>Nombre de cookie</th>
		<th>Contenido de cookie</th>
	</tr>
	<?php 
	foreach ($_COOKIE as $nombre => $contenido) {
	     echo '<tr>';
	       echo "<td>$nombre</td>";
	       echo "<td>$contenido</td>";
	     echo '</tr>';
	   }
	?>
	
</table>