<?php

if (isset($_COOKIE["visitas"])){
    $visitas=$_COOKIE["visitas"]+1;
    setcookie("visitas",$visitas);
    echo "Hola es la vez n�mero ".$visitas." que visitas esta p�gina";
    
} else {
setcookie ("visitas",1);
echo "BIENVENIDO";
}
?>