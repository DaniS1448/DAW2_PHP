<?php 
// Dada una cadena del estilo
// “Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
// Hacer un programa que muestre los datos de forma legible:
// Ejemplo:
// $cadena = “Alberto:Garay:913334455//Ana:Garcia:914445566”

// Nombre: Alberto
// Apellido: Garay
// Teléfono: 913334455
// ============
// Nombre: Ana
// Apellido: Garcia
// Teléfono: 914445566

$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";

// por cada '//' me separas $cadena dentro de $usuarios
foreach (explode ('//', $cadena) as $usuarios) {
    // por cada ':' me separas $usuarios y le das los valores a $cadaUsuario
    $cadaUsuario = explode(':', $usuarios);
    echo "Nombre: ", $cadaUsuario [0], "\n"; // muestra posicion 0 del array
    echo "Apellido: ", $cadaUsuario [1], "\n"; // muestra posicion 1 del array
    echo "Teléfono: ", $cadaUsuario [2], "\n"; // muestra posicion 2 del array
    echo "============\n";
}







?>