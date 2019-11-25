<?php
session_start();

isset($_SESSION['productos'])?:$_SESSION['productos']=[];

array_push($_SESSION['productos'],array('nombre'=>$_POST['nombre'],'precio'=>$_POST['precio']));

/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/

header('Location:index.php')

?>