<?php session_start();
// aqui guardaremos todos los verbos que introducimos en el main
// si $_SESSION no esta creado, lo crea
isset($_SESSION['verbos'])?:$_SESSION['verbos']=[];
// utilizamos array_push para introducir los verbos via post
array_push($_SESSION['verbos'], $_POST['verbo']);
// nos redirige automaticamente al menu principal
header('location:main.php');
?>