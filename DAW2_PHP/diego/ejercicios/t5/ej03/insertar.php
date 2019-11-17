<?php

session_start();
if (isset($_SESSION['pendientes'])) {
    // llamamos a bd.php
    require_once ('bd.php');
    // para poder usar la funcion conetarMYSQL();
    $db = conectarMYSQL();

    $consulta = <<<SQL
    insert into productos (nombre, precio)
    values (?,?);
SQL;
    $resultado = $db->prepare($consulta);

    foreach ($_SESSION['pendientes'] as $producto) {
        $resultado->execute([
            $producto[0],
            $producto[1]
        ]);
    }

    unset($_SESSION['pendientes']);
}

header('location:main.php');
?>