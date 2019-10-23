<?php
session_start();


if ((isset($_POST["usuarioNuevo"]) && isset($_POST["claveNuevo"]))){
    
    if ($_POST["usuarioNuevo"]!="" && $_POST["claveNuevo"]!=""){
        
        $usuarioNuevo= $_POST["usuarioNuevo"];
        $claveNuevo= $_POST["claveNuevo"];
        $array=[$usuarioNuevo=>['pwd'=>$claveNuevo,'mensajes'=>[]]];
        
        $_SESSION['usuarios']+=$array;
        
        echo "<h3>Usuarios creado</h3>";
        echo "Volviendo al login en 3 segundos...";
        header("refresh:3;url=login.php");
        
        /*
         echo "<pre>";
         print_r($_SESSION);
         echo "</pre>";
         */
    }
    else {
        echo "<h3>Campos vacios</h3>";
        echo "Volviendo al login en 3 segundos...";
        header("refresh:3;url=login.php");
    }
    
   
} else {
    echo "<h3>No se han pasado datos</h3>";
    echo "Volviendo al login en 3 segundos...";
    header("refresh:3;url=login.php");
}

?>