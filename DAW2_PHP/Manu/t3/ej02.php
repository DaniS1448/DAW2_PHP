<?php

if (isset($_COOKIE["visitas"])){
    $visitas=$_COOKIE["visitas"]+1;
    setcookie("visitas",$visitas);
    echo "Hola es la vez número ".$visitas." que visitas esta página";
    
} else {
setcookie ("visitas",1);
echo "BIENVENIDO";
}
?>