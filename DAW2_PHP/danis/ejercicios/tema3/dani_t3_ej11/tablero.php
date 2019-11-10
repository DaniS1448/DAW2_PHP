<?php
require_once 'Carta.php';
require_once 'util.php';
session_start();
?>


<?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Siete y media | DAW2</title>
  <meta name="description" content="Siete y media | DAW2">
  <meta name="author" content="DaniS1448">
  <link rel="stylesheet" type="text/css" href="css/cssprincipal.css">
</head>

<body>
	<div class="centrado">
		<div class="cajas">
    	
    		<div class="divTitulo">
    			<h2>Bienvenido <span><?= $_SESSION['name']; ?>.</span></h2>
    			<?php if (substr($_SESSION['usuario'],0,4) == 'test') {resetVidas($_SESSION['usuario']);}?>
    		</div>
    		
        	<span class="estadisticas">Victorias: <span id="puntostotal" class="victorias"><?= recoger($_SESSION['usuario'], 'points')?></span></span>
        	<span class="estadisticas">Vidas: <span id="vidashoy" class="vidas"><?= recoger($_SESSION['usuario'], 'vidas')?></span></span>
        	<a href="logout.php"><button class="boton_principal">Salir</button></a>
        	<br>
        
        	<div class="juego">
        		<?php include_once 'juego.php';?>
        	</div>
    	</div>
    	
    	<div class="cajas">
    		<h2>TOP 10 Mejores jugadores</h2>
    		<?= crearTopBoard(10); ?>
    		<br>
    		<a href="verTodos.php"><button class="boton">Ver todos los jugadores</button></a>
    	</div>
	</div>

</body>
</html>

<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>