<?php
session_start();
require_once 'bd.php';

isset($_SESSION['banca']['carta'])?:$_SESSION['banca']['carta']=[];
isset($_SESSION['banca']['puntos'])?:$_SESSION['banca']['puntos']=[];
isset($_SESSION['puntuacionBanca'])?:$_SESSION['puntuacionBanca']=0;

$pBanca=$_SESSION['puntuacionBanca'];
$p=$_SESSION['puntuacion'];

do{
    
$arrayCarta=cartaAleatoria();
array_push($_SESSION['banca']['carta'],$arrayCarta[0]);
array_push($_SESSION['banca']['puntos'],$arrayCarta[1]);

$pBanca+=$arrayCarta[1];


}while($pBanca<$p);
header("Location:main.php");
?>