<h1>Listado de Cookie - Nivel 2</h1>
<?php echo "Listado de cookies del nivel ".pathinfo($_SERVER['REQUEST_URI'])['dirname']?>
<table border="1">
<tr> <th>Nombre</th> <th>Contenido</th> </tr>

<?php
foreach ($_COOKIE as $e => $a){
    echo "<tr> <td>$e</td><td>$a</td></tr>";
}
?>
</table>