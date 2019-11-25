<?php 
require_once 'util.php';
session_start();
if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Siete y media | DAW2</title>
  <meta name="description" content="Siete y media | DAW2">
  <meta name="author" content="DaniS1448">
  <link rel="stylesheet" type="text/css" href="css/rwd-table.css?v=1.1">
  <link rel="stylesheet" type="text/css" href="css/micss.css?v=1.2">
  <link rel="stylesheet" type="text/css" href="css/botones.css?v=1.1">
  <style type="text/css">
    body{
        margin-left: 5% !important;
    }
  </style>
</head>

<body>
<h2>Todos los jugadores</h2>
<?= crearTopBoard(0); ?>
<br>
<a href="tablero.php"><button class="boton">Volver</button></a>
</body>
</html>
<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>