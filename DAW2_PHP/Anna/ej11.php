<?php
/*Dada una cadena del estilo
	“Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
	Hacer un programa que muestre los datos de forma legible:
	Ejemplo:
	$cadena = “Alberto:Garay:913334455//Ana:Garcia:914445566”

	Nombre: Alberto
	Apellido: Garay
	Teléfono: 913334455
	============
	Nombre: Ana
	Apellido: Garcia
	Teléfono: 914445566
*/

$cadena='Anna:Savytska:634578899//David:Rico:666666666//Celia:Armenteros:555555555';
//---------------------------------------

$a=explode("//",$cadena);
//$a=implode(":",$a);
//$a=explode(":",$a);
print_r($a);
    

    foreach($a as $i)
    {
     $b=explode(":",$i);   
    echo "Nombre: $b[0]".PHP_EOL;
    echo "Apellido: $b[1]".PHP_EOL;
    echo "Teléfono: $b[2]".PHP_EOL;

    echo "==============".PHP_EOL;
    
}
?>
