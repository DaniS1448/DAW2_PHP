<h3>Lista de palabras en el diccionario</h3>

<table>
<tr>
	<th>ESPAÑOL</th>
	<th>INGLES</th>
	<th>FRANCES</th>
</tr>
<?php 
session_start();

if(isset($_SESSION['diccionario'])){
    
    foreach ($_SESSION['diccionario'] as $palabras){
        
        echo "<tr>";
        echo "<td>$palabras[0]</td>";
        echo "<td>$palabras[1]</td>";
        echo "<td>$palabras[2]</td>";
        echo "</tr>";
        
    }
    
}

?>

</table>
<a href="add.php"><button>Añadir palabras</button></a>
<a href="traducir.php"><button>Traducir</button></a>