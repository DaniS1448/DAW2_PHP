<?php 
session_start();
if(isset($_SESSION['pendientes'])) {
    
isset($_SESSION['diccionario'])?:$_SESSION['diccionario']=[];

foreach($_SESSION['pendientes'] as $palabras){
    array_push($_SESSION['diccionario'], $palabras);
}
unset($_SESSION['pendientes']);

}

header('location:main.php');
?>