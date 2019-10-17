<?php


$ruta=pathinfo($_SERVER['REQUEST_URI'])['dirname'];;
   if ($_GET["nivelCookie"]=="1"){
        $ruta.="/nivel1";
    } else if ($_GET["nivelCookie"]=="2"){
        $ruta.="/nivel1/nivel2";
    }
    setcookie($_GET["nombreCookie"],$_GET["contenidoCookie"],0,$ruta);
    echo "<h2>Cookie creada</h2> <a href=\"manu_t3_ej03_index.php\">Volver</a>";
    

?>