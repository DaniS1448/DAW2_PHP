<?php 
// recogemos via post el valor de producto y precio y lo guardamos en las variables para usarlos en la consulta  
$producto=$_POST['producto'];
$precio=$_POST['precio'];
// llamamos a bd.php
require_once('bd.php');
//para poder usar la funcion conetarMYSQL();
conectarMYSQL();

    $db = conectarMYSQL();
  
        $consulta = <<<SQL
    insert into productos (nombre, precio)
    values ('$producto', $precio );
SQL;
        $db->exec($consulta);
    
header('location:main.php');

?>