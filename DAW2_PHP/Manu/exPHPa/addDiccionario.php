<?php
session_start();
isset($_SESSION['diccionario'])?:$_SESSION['diccionario']=[];

if (isset($_SESSION['pendientes'])){
    
    foreach($_SESSION['pendientes'] as $palabras){
        
        array_push($_SESSION['diccionario'],$palabras);
        
    }
    unset($_SESSION['pendientes']);
    
}
header('Location:main.php');