<h3>Añadir nuevo producto</h3>
<form action="mainPOST.php" method="post">
Producto: <input type="text" name="producto"><br/>
Precio: <input type="text" name="precio"><br/>
</br>
<input type="submit" value="Añadir">
</form>

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

echo "</table>";
?>