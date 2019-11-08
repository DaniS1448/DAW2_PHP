<h2>Lista de verbos</h2><br/>
<?php
session_start();
include '../ej1Ma/helpers.php';

//$verbos=$_SESSION["verbos"];

//$verbos=implode (",", $_SESSION["verbos"] );
/* foreach($_SESSION as $verbo){
    $verbos=$verbo;
}


 */
foreach ($_SESSION["verbos"] as $verbos) {
$verbo=$verbos;
}
$html=conjugar($verbo);
if(strtolower($verbo)=='ar'){ 
    $conjugacion=1;
}
elseif (strtolower($verbo)=='er'){
    $conjugacion=2;
}
else{
    $conjugacion=3;
}
echo '<table border = "1">'.PHP_EOL;
//th es negrita 
echo "<tr><th>Infinitivo</th><th>Conjugacion</th><th>Presente de indicativo</tr>".PHP_EOL;

foreach ($_SESSION["verbos"] as $verbos) {
    //Dibuja las filas 
    echo "<tr></tr>".PHP_EOL;
    //rellena las columnas
    echo "<td>$verbos</td>".PHP_EOL;
    echo "<td>$conjugacion</td>".PHP_EOL;
    echo "<td>$html</td>".PHP_EOL;
   
}
echo '</table>';
?>       