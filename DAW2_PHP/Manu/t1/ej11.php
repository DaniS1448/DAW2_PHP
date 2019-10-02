<?php
/*Dada una cadena del estilo
	“Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
	Hacer un programa que muestre los datos de forma legible:
*/

$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";

//print_r (explode("//",$cadena));

foreach (explode("//",$cadena) as $e){
    list($nombre, $apellido, $tlf) = explode(":", $e);
    echo "Nombre: $nombre\n";
    echo "Apellido: $apellido\n";
    echo "Telefono: $tlf\n";
    echo "==========\n";
}
?>