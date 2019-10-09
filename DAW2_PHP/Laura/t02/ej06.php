<?php
echo '<table border = "1">'.PHP_EOL;
//th es negrita 
echo "<tr><th>#</th><th>Caracter</th><th>Cod.URL</th></tr>".PHP_EOL;

for ($i = 0; $i <=255 ; $i++) {
    //Dibuja las filas 
    echo "<tr></tr>".PHP_EOL;
    //rellena las columnas
    echo "<td>$i</td>".PHP_EOL;
    echo "<td>".chr($i)."</td>".PHP_EOL;
    echo "<td>".urlencode($i)."</td>".PHP_EOL;
   
}
echo "</table>";
?>