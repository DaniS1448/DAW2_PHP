<h3>Lista de verbos</h3>
<?php
session_start();
// incluimos el helper para poder usar su funcion
include_once 'helper.php';
isset($_SESSION['verbos'])?:$_SESSION['verbos']=[];
// mientras el tamaño del array sea distinto de cero (contenga elementos), me crea la tabla
if (sizeof($_SESSION['verbos']) != 0) {
// creamos y organizamos la tabla
echo "<table border=1>";
echo "<tr><th>Infinitivo</th><th>Conjugacion</th><th>Presente de indicativo</th></tr>";
echo "<tr>";
// recorremos el array con todos los verbos que tenga
foreach($_SESSION['verbos'] as $verbo){
    echo "<td>$verbo</td>";
    // si el verbo acaba en ar es conjugacion 1
    if (substr($verbo, - 2) == 'ar') {
        echo "<td>1</td>";
    } // si el verbo acaba en er es conjugacion 2
    else if (substr($verbo, - 2) == 'er') {
        echo "<td>2</td>";
    } // si el verbo acaba en ir es conjugacion 3
    else if (substr($verbo, - 2) == 'ir') {
        echo "<td>3</td>";
    }
    // terminamos añadiendo el método y cerramos la fila y la tabla
    echo "<td>" . conjugar($verbo) . "</td></tr>";
}
echo "</table>";
}
else { // si el tamaño del array es 0, me muestra el siguiente texto
    echo "No existen verbos conjugados en la base de datos";
}
?>