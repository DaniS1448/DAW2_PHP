
<h2>Insertar productos</h2>
<form action="indexPost.php" method="post">
Nombre - <input type="text" name="nombre"/>
<br>
Precio - <input type="text" name="precio"/>
<br>
<input type="submit" value="Añadir"/>
</form>

<?php require_once 'verProductos.php';

    session_start();
    
    if (isset($_SESSION['productos'])):?>
        
       <h3>Lista de productos pendientes</h3>
       <table border="1">
       <tr><th>Nombre</th><th>Precio</th></tr>
       <?php 
       foreach($_SESSION['productos'] as $e){
           echo "<tr>";
           echo "<td>{$e['nombre']}</td>";
           echo "<td>{$e['precio']}</td>";
           echo "</tr>";
       }
       ?>
       </table>
      <a href="subirProductos.php"><button>Guardar en la base de datos</button></a>
        
    <?php endif;?>
