<?php 
session_start();
require_once 'bd.php';

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];

isset($_SESSION['usuario'])?$_SESSION['usuario'] : "" ;



?>