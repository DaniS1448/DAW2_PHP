<?php
$ruta = pathinfo($_SERVER['REQUEST_URI'])['dirname']; //obtenemos la ruta raiz
if ($_GET["nivel"] == "1") { //si el valor recogido es de nivel == 1 ..
    $ruta .= "/nivel1"; //.. concatenamos la ruta con nivel1/
} else if ($_GET["nivel"] == "2") { //si el valor recogido es de nivel == 2...
    $ruta .= "/nivel1/nivel2"; //.. concatenamos la ruta con nivel2/
}
setcookie($_GET["nombre"], $_GET["contenido"], 0, $ruta);
//creamos una cookie con el nombre y el contenido que le escribimos en la ruta que obtuvimos
echo "<h2>Cookie creada</h2> <a href=\"ej03.php\">Volver</a>";

?>