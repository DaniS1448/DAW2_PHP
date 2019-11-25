Añadir nueva traduccion
<form action="addPOST.php" method="post">
ESPAÑOL: <input type="text" name="es"><br>

INGLÉS: <input type="text" name="en"><br>

FRANCÉS: <input type="text" name="fr"><br>

<input type="submit" value="Actual => Pendientes">
</form>
<a href="insertar.php"><button>Pendientes => Diccionario</button></a>
<a href="borrar.php"><button>Cancelar</button></a><br>

<?php 
session_start();
// si existe pendientes me imprime un tabla
if (isset($_SESSION['pendientes'])) {
    echo "<hr>";
    echo "<h4>Lista de palabras pendientes</h4>";
    echo "<table border=1>";
    echo "<tr><th>ESPAÑOL</th><th>INGLÉS</th><th>FRANCÉS</th></tr>";
    // me saca cada palabra
    foreach ($_SESSION['pendientes'] as $palabras) {
        echo "<tr>";
        echo "<td>{$palabras['es']}</td>";  
        echo "<td>{$palabras['en']}</td>";  
        echo "<td>{$palabras['fr']}</td>";  
        echo "</tr>";

    }

}



?>