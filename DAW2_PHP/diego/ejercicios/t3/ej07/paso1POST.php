<?php
session_start();
isset($_SESSION['persona']) ?: $_SESSION['persona'] = [];

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "no ha insertado nombre";
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "no ha insertado apellido";
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "no ha insertado fecha";
$genero = isset($_POST['genero']) ? $_POST['genero'] : "no ha seleccionado género";
$pareja = isset($_POST['pareja']) ? $_POST['pareja'] : "sin pareja";
$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : "sin hijos";
$nacionalidad = isset($_POST['nacionalidad'])?$_POST['nacionalidad']: "no ha insertado nacionalidad";

array_push($_SESSION['persona'], $nombre);
array_push($_SESSION['persona'], $apellidos);
array_push($_SESSION['persona'], $fecha);
array_push($_SESSION['persona'], $genero);
array_push($_SESSION['persona'], $pareja);
array_push($_SESSION['persona'], $hijos);
array_push($_SESSION['persona'], $nacionalidad);

echo "<pre>";
for ($i = 0; $i < sizeof($_SESSION['persona']); $i ++) {
    echo $_SESSION['persona'][$i] . PHP_EOL;
}
echo "</pre>";

header('location:paso2.php');

?>