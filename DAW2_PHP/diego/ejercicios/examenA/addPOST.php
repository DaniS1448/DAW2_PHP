<?php 
session_start();
// si cualquiera de los campos NO esta vacio
if ($_POST['es'] != '' && $_POST['en'] != '' && $_POST['fr'] != '') {
   //  si no esta creado pendientes, lo crea con estructura
    isset($_SESSION['pendientes'])?:$_SESSION['pendientes']=[];
    // los valores recibidos por post se los damos a arrayPalabras con esa estructura
    $arrayPalabras = ['es'=>$_POST['es'], 'en'=>$_POST['en'], 'fr' =>$_POST['fr']];
    // metemos esos datos en el array pendientes
    array_push($_SESSION['pendientes'], $arrayPalabras);
    
    header('location:add.php');
    
} else {
    echo "Ningún campo puede estar vacío<br>";
    echo "<a href=\"add.php\"><button>Volver</button></a>";
}




?>