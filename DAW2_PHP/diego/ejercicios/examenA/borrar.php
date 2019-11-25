<?php 
session_start();
unset($_SESSION['pendientes']);
header('location:main.php');

?>