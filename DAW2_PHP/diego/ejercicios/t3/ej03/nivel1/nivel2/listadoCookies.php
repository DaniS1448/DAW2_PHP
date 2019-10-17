<?php 
$ruta=pathinfo($_SERVER['REQUEST_URI'])['dirname'];
echo "Listado de cookies de nivel $ruta";
echo <<<TABLA
<table border="1">
<tr> 
    <th>Nombre cookie</th> 
    <th>Contenido cookie</th> 
</tr>

TABLA;

foreach ($_COOKIE as $k => $v){
    echo "<tr> <td>$k</td><td>$v</td></tr>";
}

?>

</table>