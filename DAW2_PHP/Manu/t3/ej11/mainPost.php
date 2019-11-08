<?php
session_start();
require_once 'bd.php';

isset($_SESSION['cartas']['carta'])?:$_SESSION['cartas']['carta']=[];
isset($_SESSION['cartas']['puntos'])?:$_SESSION['cartas']['puntos']=[];
isset($_SESSION['puntuacion'])?:$_SESSION['puntuacion']=0;

$arrayCarta=cartaAleatoria();
array_push($_SESSION['cartas']['carta'],$arrayCarta[0]);
array_push($_SESSION['cartas']['puntos'],$arrayCarta[1]);
header("Location:main.php");
?>