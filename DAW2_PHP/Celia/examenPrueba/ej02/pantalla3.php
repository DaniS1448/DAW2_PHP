<?php
session_start();
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

//$primera=isset($_COOKIE["primer"])?$_COOKIE["primer"]:null; 


$primero=$_SESSION["primero"];

$segundo=isset($_POST["segundo"])?$_POST["segundo"]:null;


echo "Primer numero: $primero <br/>";
echo "Segundo numero: $segundo <br/>";

if( $primero>$segundo){
    
    echo "El primer numero es MAYOR que el segundo";
}
else{
    echo "El primer numero es MENOR que el segundo";
}




?>