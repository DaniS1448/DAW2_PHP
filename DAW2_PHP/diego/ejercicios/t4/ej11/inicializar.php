<?php 
session_start();
require_once ('util.php');

$_SESSION['yo']=[];
$_SESSION['baraja']= inicializarMazo();
$_SESSION['gm']=0;
$_SESSION['gb']=0;

header('location:tablero.php');

?>