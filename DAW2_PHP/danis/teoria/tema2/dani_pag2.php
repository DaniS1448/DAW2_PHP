<?php
echo "Hola ";
echo isset($_GET['nombre']) ? $_GET['nombre'] : 'Falta el parametro "nombre"';
//echo "Hola, ", $_GET['nombre'];
?>