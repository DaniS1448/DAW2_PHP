<?php session_start();?>
<h3>Añadir nuevo producto</h3>
<form action="mainPOST.php" method="post">
Producto: <input type="text" name="nombre"><br/>
Precio: <input type="text" name="precio"><br/>
<br>
<input type="submit" value="Preparar">
</form>
<a href="insertar.php"><button>Insertar</button></a>

<?php 
require_once 'bd.php';
require_once 'util.php';

conectarMYSQL();
$productos=lectura();
?>
<table border=1>
<tr><th>NOMBRE</th><th>PRECIO</th></tr>
<?php 
foreach ($productos as $producto){
    echo "<tr>";    
    echo "<td>".$producto['nombre']."</td><td>".$producto['precio']."</td>";
    echo "</tr>";
}
?>
</table>
<?php if (isset($_SESSION['pendientes'])): //en vez del corchete ponemos dos puntos?>
<hr>
<h3>Productos a preparar</h3>
<table>
<tr><th>Nombre</th><th>Precio</th></tr>
<?php 
foreach ($_SESSION['pendientes'] as $producto) {
   echo "<tr>";
   echo "<td>".$producto[0]."</td><td>".$producto[1]."</td>";
   echo "</tr>";   
}
?>
</table>
<?php endif; // finalizamos este tipo de if?>
