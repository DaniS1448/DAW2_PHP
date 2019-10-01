<?php
$fecha1 = new DateTime('2009-10-11');
$fecha2 = new DateTime('2009-10-13');
$resultado = $fecha1->diff($fecha2);
echo $resultado->format('%R%a días');
?>