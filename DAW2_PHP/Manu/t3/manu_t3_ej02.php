<?php
if (isset($_COOKIE["visitas"])){
    
    $visitas=$_COOKIE["visitas"]+1;
    setcookie("visitas",$visitas);
    echo "Hola es la vez numero ".$visitas." que visitas esta pagina";
    
} else {
    
setcookie ("visitas",1);
echo "BIENVENIDO";

}
?>