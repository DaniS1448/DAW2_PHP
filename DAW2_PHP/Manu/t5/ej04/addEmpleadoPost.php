<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tlf=$_POST['tlf'];
$sexo=$_POST['sexo'];

$problemas="";

if ($sexo!='H' && $sexo !='M'){
    $problemas.="El sexo indicado no es correcto.<br>";
}

if( preg_match('([a-zA-Z])', $tlf) ){
    $problemas.="El telefono solo puede contener numeros.<br>";
}

if($problemas!=""){
    echo "<h3>Error</h3>";
    echo $problemas;
    echo "<a href=\"addEmpleado.php?nombre=$nombre&apellido=$apellido&tlf=$tlf&sexo=$sexo\"><button>Volver</button></a>";
}else {
    header("Location:addEmpleadoBien.php?nombre=$nombre&apellido=$apellido&tlf=$tlf&sexo=$sexo");   
}
?>