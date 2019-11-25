<?php
session_start();

$departamento = isset($_POST['departamento'])?$_POST['departamento']:"no se ha seleccionado departamento";
$salario = isset($_POST['salario'])?$_POST['salario']:"no se ha insertado un salario";
$comentarios = isset($_POST['comentarios'])?$_POST['comentarios']:"sin comentarios";

array_push($_SESSION['persona'], $departamento);
array_push($_SESSION['persona'], $salario);
array_push($_SESSION['persona'], $comentarios);

header('location:paso3.php');

?>