<h3>Añadir nueva traduccion</h3>
<form action="addPost.php" method="post">

ESPAÑOL<input type="text" name="es"/>
<br>
INGLES<input type="text" name="en"/>
<br>
FRANCES<input type="text" name="fr"/>
<br>
<input type="submit" value="Actual => Pendientes"/>
</form>
<a href="addDiccionario.php"><button>Pendientes => Diccionario</button></a>
<a href="cancelar.php"><button>Cancelar</button></a>

<?php 
session_start();
if (isset($_SESSION['pendientes'])){
    
    echo <<<HTML
        <hr>
        <h4>Lista de palabras pendientes de añadir al diccionario</h4>
        <table>
        <tr>
            <th>ESPAÑOL</th>
            <th>INGLES</th>
            <th>FRANCES</th>
        </tr>
HTML;
    
    foreach($_SESSION['pendientes'] as $palabras){
        echo "<tr>";
        echo "<td>$palabras[0]</td>";
        echo "<td>$palabras[1]</td>";
        echo "<td>$palabras[2]</td>";
        echo "</tr>";
    }
    
   echo "</table>";
    
}

?>