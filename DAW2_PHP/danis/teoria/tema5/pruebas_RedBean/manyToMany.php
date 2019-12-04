<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=pruebas_redbean', 'root', '');

$pepe = R::dispense( 'persona' );
$pepe->nombre='Pepe';

$futbol = R::dispense('aficion');
$futbol->nombre='futbol';

$futbol -> sharedPersonaList[] = $pepe;
R::store( $futbol );

// ALTERNATIVAMENTE
// $pepe->sharedAficionList[] = $futbol;
// R::store( $pepe );

?>