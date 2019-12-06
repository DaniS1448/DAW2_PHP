<?php session_start();?>
<form action="insertarPost.php" method="post">
	Nombre producto: <input type="text" name="nombre"><br>
	Precio producto: <input type="text" name="precio"><br>
	<input type="submit" value="Preparar">
</form>
<a href="insertarBaseDatos.php"><button>Insertar</button></a>
<br>
<br>
<?php
require_once '../util.php';
echo pintarProductos([]);
if (isset($_SESSION['prodTemp'])) {
    $html = '';
    foreach ($_SESSION['prodTemp'] as $producto) {
        $html .= <<<HTML
        <tr>
            <td><b>{$producto[0]}</b></td>
            <td><b>{$producto[1]}</b></td>
        </tr>
HTML;
        echo $html;
    }
}
echo "</table>";
?>
