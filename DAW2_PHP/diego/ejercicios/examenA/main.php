<h3>Lista de palabras en el diccionario</h3>
<form action="add.php" method="post">
<input type="submit" value="Añadir palabras">

</form>
<a href="traducir.php"><button>Traducir</button></a>

<?php 
session_start();

if (isset($_SESSION['diccionario'])) {
    echo "<hr>";
    echo "<table border=1>";
    echo "<tr><th>ESPAÑOL</th><th>INGLÉS</th><th>FRANCÉS</th></tr>";
    
    foreach ($_SESSION['diccionario'] as $palabras) {
        echo "<tr>";
        echo "<td>{$palabras['es']}</td>";
        echo "<td>{$palabras['en']}</td>";
        echo "<td>{$palabras['fr']}</td>";
        echo "</tr>";      
    }    
}
?>
